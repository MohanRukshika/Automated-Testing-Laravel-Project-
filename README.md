# 🚀 Learning GitHub Actions with Laravel

I’m using a small Laravel 13 API to learn how to automate testing with GitHub Actions.

## 🧪 What the test checks

The test sends a `GET` request to `/api/products` and checks that the API returns `200 OK` and the expected product data.

## 💻 Run the tests locally

From the project folder, run `php artisan test` to see which tests pass or fail.

## ⚙️ Automation goal

Set up `.github/workflows/tests.yml` so GitHub runs the same tests on every push and pull request.
