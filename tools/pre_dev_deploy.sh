#!/bin/bash

if [ "$SKIP_JOB" == true ]; then
    echo "Skipping Job"
    exit
fi

cd venturseed-website || exit 

tar -czf venturseed-website.tgz ./*

gcloud builds submit venturseed-website.tgz \
  --tag us-central1-docker.pkg.dev/venturseed-website-dev/venturseed-website-dev/venturseed-website-dev1:"$CI_COMMIT_REF_SLUG"

gcloud run deploy venturseed-website-dev1 \
  --image us-central1-docker.pkg.dev/venturseed-website-dev/venturseed-website-dev/venturseed-website-dev1:"$CI_COMMIT_REF_SLUG" \
  --region us-central1 \
  --service-account vs-dev-cloud-cd@venturseed-website-dev.iam.gserviceaccount.com