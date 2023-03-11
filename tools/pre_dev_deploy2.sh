#!/bin/bash

if [ "$SKIP_JOB" == true ]; then
    echo "Skipping Job"
    exit
fi

cd apps/wa-api || exit 

tar -czf wa-api.tgz ./*

gcloud builds submit wa-api.tgz \
  --tag us-central1-docker.pkg.dev/woaccelerator-dev/woaccelerator-dev/wa-api-dev2:"$CI_COMMIT_REF_SLUG"

gcloud run deploy wa-api-dev2 \
  --image us-central1-docker.pkg.dev/woaccelerator-dev/woaccelerator-dev/wa-api-dev2:"$CI_COMMIT_REF_SLUG" \
  --region us-central1 \
  --service-account woaccelerator-dev-cloud-cd@woaccelerator-dev.iam.gserviceaccount.com
