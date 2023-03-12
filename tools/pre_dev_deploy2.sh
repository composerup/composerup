#!/bin/bash

if [ "$SKIP_JOB" == true ]; then
    echo "Skipping Job"
    exit
fi

cd apps/wa-api || exit 

tar -czf wa-api.tgz ./*

gcloud builds submit wa-api.tgz \
  --tag us-central1-docker.pkg.dev/composer-up-dev/composerup-dev/composerup-dev2:"$CI_COMMIT_REF_SLUG"

gcloud run deploy wa-api-dev2 \
  --image us-central1-docker.pkg.dev/composer-up-dev/composerup-dev/composerup-dev2:"$CI_COMMIT_REF_SLUG" \
  --region us-central1 \
  --service-account cu-dev-cloud-cd@composer-up-dev.iam.gserviceaccount.com
