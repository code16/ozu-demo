# Ozu Demo Project

This repository is a demonstration project showcasing how to build a static site with dynamic content using the [Ozu client](https://github.com/code16/ozu-client) for Laravel. Explore the live demo at: [https://demo.ozu.code16.fr](https://demo.ozu.code16.fr)

---

## Table of Contents

* [Features](#features)
* [Prerequisites](#prerequisites)
* [Try Ozu with this project](#try-ozu-with-this-project)
* [Usage](#usage)

    * [Configure CMS](#configure-cms)
    * [Local Development](#local-development)
    * [Build Static Site](#build-static-site)
* [Deployment](#deployment)
* [Technologies](#technologies-used-in-this-demo-project)

---

## Features

* **Dynamic Content** powered by Ozu, a content managment platform leveraging our open-source  Laravel CMS ([Sharp](https://github.com/code16/sharp)) integrated via the [ozu-client package](https://github.com/code16/ozu-client)
* **Static Site Generation** is **fully handled** by Ozu for fast, secure, and cache-friendly delivery
* **Come as you are**: use your back and frontend stacks to develop static

---

## Prerequisites

* PHP 8.3+
* An Ozu account (beta access, feel free to contact us, we're looking for beta testers)

---

## Try Ozu with this project

1. **Clone the repository**

   ```bash
   git clone https://github.com/dvlpp/ozu-demo.git
   cd ozu-demo
   ```

2. **Install PHP dependencies**

   ```bash
   composer install
   ```

3. **Install frontend dependencies**

   ```bash
   npm install
   ```

4. **Environment configuration**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure Ozu credentials** in your `.env`:

   ```dotenv
   OZU_API_KEY=your_api_key
   OZU_WEBSITE_KEY=your_website_key
   OZU_API_HOST=https://ozu.code16.fr/
   ```

---

## Usage

### Configure CMS

Publish and edit the Ozu configuration:

```bash
php artisan vendor:publish --tag="ozu-client-config"
# edit config/ozu-client.php and declare your models under 'collections'
php artisan ozu:configure-cms
```

### Local Development

Run the built-in server for frontend development:

```bash
composer run dev
```

### Build Static Site

Ozu has a custom (not-open) builder that relies on [spatie/laravel-export](https://github.com/spatie/laravel-export)
To try to build locally this project, you can run:

```bash
composer require spatie/laravel-export
php artisan export
```

Static files will be output to the `public/` directory, ready for deployment.

> [!INFO]
> Keep in mind that there may be small differences between this build method and the Ozu final render.

> [!WARNING]
> To preview your now rendered static site, remember that you'll have to configure a webserver/virtual host to serve your export so that it'll appear correctly on your browser.
> Opening your export files directly in your browser will not work correctly.

---

## Deployment

1. **Connect your GitHub repo** via the Ozu dashboard.
2. **Install the Ozu GitHub App** and grant read-only access.
3. **Provision a Netlify site** or your own VPS via an SSH access.
4. **Add content to your website** from Ozu's CMS.
5. **Trigger a deploy** from the Ozu dashboard.

> See [Ozu](https://ozu.code16.fr) for more details.

---

## Technologies used in this demo project

* **Laravel** (PHP Framework)
* **[ozu-client](https://github.com/code16/ozu-client)** (Ozu integration package) 
* **Tailwind CSS**
* **Vite**
* **Alpine.js**
