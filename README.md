# LEMP WordPress Project

This project sets up a LEMP (Linux, Nginx, MySQL, PHP) stack using Docker for running a WordPress application on a Debian 12 virtual machine.

## Project Structure

- **Vagrantfile**: Configures the virtual machine with parameters such as CPU, memory, and storage type.
- **docker-compose.yml**: Describes the Docker Compose configuration for running LEMP services, defining containers for Nginx, PHP, and the database, along with their dependencies and networks.
- **.env**: Contains environment variables for configuring the application.
- **.gitignore**: Specifies files and directories to be ignored by Git version control.
- **README.md**: Documentation for the project, including setup and running instructions.
- **provision/bootstrap.sh**: Initializes the system by installing necessary packages and dependencies.
- **provision/setup-docker.sh**: Sets up Docker on the virtual machine, installing Docker and Docker Compose.
- **nginx/conf.d/default.conf**: Nginx configuration file defining server settings, request handling, and routing to PHP.
- **php/Dockerfile**: Used to create the Docker image for PHP, specifying the base image and required extensions.
- **php/php.ini**: PHP configuration file defining memory and execution time settings.
- **php/www.conf**: Configuration file for PHP-FPM, including process pool settings.
- **db/initdb.d/init.sql**: SQL scripts for initializing the database on the first run of the database container.
- **wordpress/wp-config.php**: WordPress configuration file containing database connection settings and other configuration parameters.
- **wordpress/wp-content/plugins**: Directory for installing WordPress plugins.
- **wordpress/wp-content/themes**: Directory for installing WordPress themes.
- **scripts/start.sh**: Script to start all necessary containers and services for the application.
- **scripts/stop.sh**: Script to stop all running containers and services.

## Getting Started

1. **Clone the repository**:
   ```bash
   git clone <repository-url>
   cd lemp-wp
   ```

2. **Start the virtual machine**:
   ```bash
   vagrant up
   ```

3. **Access the application**:
   Open your web browser and navigate to `http://localhost`.

## Additional Information

For detailed instructions on each component, refer to the respective files in the project.