# Simple Static Portfolio Website by Laravel

This is a simple static portfolio website built with Laravel. The website showcases different projects, providing details like title, description, and images for each project. The purpose of this project is to create a personal portfolio to display your work in an organized and visually appealing manner.

## Features

- **Project Showcase**: Display various projects with images, descriptions, and additional details.
- **File-Based Storage**: Uses `storage/data` for storing project data and other content.
- **Responsive Design**: Ensures the website looks good on all devices.
- **Fast Performance**: Lightweight, optimized for speed, and minimal load times.

## Built With

- [Laravel](https://laravel.com/) - The PHP framework used for this project.

## Getting Started

To get a local copy up and running, follow these simple steps:

### Prerequisites

- [PHP](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/) and [npm](https://www.npmjs.com/get-npm)
- [Laravel](https://laravel.com/docs/installation)

### Installation

1. **Clone the repository**:

    ```bash
    git clone https://github.com/ahmad-cit22/simple-portfolio-by-laravel.git
    cd simple-portfolio-by-laravel
    ```

2. **Install dependencies**:

    ```bash
    composer install
    npm install
    npm run dev
    ```

3. **Set up the environment**:

    Copy the example environment file and configure your local settings:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Run the application**:

    Start the Laravel development server:

    ```bash
    php artisan serve
    ```

    The website should be accessible at `http://localhost:8000`.

## Usage

- **Adding Projects/Experiences**: Update the JSON or other data files located in `storage/data` to add or modify projects/experiences.
- **Customizing Contents**: Modify the content of the `resources/views` directory to add your own customized contents.
- **Styling**: Update the CSS styles as needed in the `public/css` directory to match your branding.

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request for review.

## License

This project is open-source and available under the [MIT License](LICENSE).

## Contact

Nafis Ahmed - [n.ahmad.web.cit22@gmail.com
](mailto:n.ahmad.web.cit22@gmail.com
)

GitHub: [ahmad-cit22](https://github.com/ahmad-cit22)
