#!/bin/bash

if [ "$SKIP_JOB" == true ]; then
    echo "Skipping Job"
    exit
fi

cd composerup || exit 

tar -czf composerup.tgz ./*

gcloud builds submit composerup.tgz \
  --tag us-central1-docker.pkg.dev/composerup-dev/composerup-dev/composerup-dev1:"$CI_COMMIT_REF_SLUG"

gcloud run deploy composerup-dev1 \
  --image us-central1-docker.pkg.dev/composerup-dev/composerup-dev/composerup-dev1:"$CI_COMMIT_REF_SLUG" \
  --region us-central1 \
  --service-account vs-dev-cloud-cd@composerup-dev.iam.gserviceaccount.com