#!/bin/bash

# The directory where your project is located
PROJECT_DIR="/path/to/your/project"

# The branch you want to deploy
BRANCH="main"

# Move into the project directory
cd $PROJECT_DIR

# Fetch the latest changes from the repository
git fetch

# Reset the project to the latest commit on the desired branch
git reset --hard origin/$BRANCH

# Pull the latest changes (optional if the reset command is used)
# git pull origin $BRANCH

# Add any additional commands you need for deployment below
# For example:
# - Restart your application
# - Run database migrations
# - Clear cache
# - Install/update dependencies

# Example for a Node.js application:
# npm install
# pm2 restart your-app-name

echo "Deployment completed."
