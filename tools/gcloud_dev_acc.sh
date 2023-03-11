#!/bin/bash


#cat "$vs_dev_service_creds" >"$(pwd)/service-account.json"

gcloud config set project composerup-dev

gcloud auth activate-service-account $ACCOUNT_DEV --key-file $GOOGLE_CLOUD_CREDENTIALS_DEV


# npm For Vite production assets
#which npm
#echo $PATH
#apk add nodejs npm
#cd venturseed-website || exit
#npm i vite 
#npm run prod