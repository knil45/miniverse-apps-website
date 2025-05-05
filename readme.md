# miniverseapps-website

## Deploy on VPS

Follow these steps to deploy the application on a VPS:

1. **Set up SSH**: Configure SSH access between GitHub and the VPS for secure communication.

2. **Define GitHub Workflow**: Create a GitHub Workflow to trigger deployment when changes are pushed to the `main` branch.

3. **Copy Deployment Script**: Transfer the `/scripts/vps-*.sh` file to the VPS for deployment automation.

4. **Set Environment Variables**: Define the required `.env` file on the VPS with appropriate configurations.

5. **Run GitHub Workflow**: Execute the GitHub Workflow to initiate the deployment process.

6. **Configure Nginx**: Set up Nginx to serve the application, ensuring the configuration file is correctly placed.

7. **Assign Domains and SSL**: Assign the appropriate domains and generate an SSL certificate for secure access.

By following these steps, you can successfully deploy the application on your VPS.

## VPS Configuration Details

- **Application Directory**: `/var/www/miniverse-apps-website`

- **Nginx Configuration File**: `/etc/nginx/sites-available/miniverse-apps-website`

- **Website URL**: [miniverseapps.com](https://miniverseapps.com)

- **Services Used**: Nginx, PHP
