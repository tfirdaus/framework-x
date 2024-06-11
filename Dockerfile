# Use the official FrankenPHP Docker image
FROM dunglas/frankenphp

# Set the working directory
WORKDIR /app

# Copy the application files
COPY . .

# Install dependencies
RUN composer install

# Expose the required port
EXPOSE 80

# Start the application
CMD ["php", "public/index.php"]
