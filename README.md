# Laravel Code First

This repository was built as sample code for the Bump.sh guide on _[Using OpenAPI to simplify building and testing Laravel APIs](https://docs.bump.sh/guides/openapi/design-first-laravel/)_. Learn to use the API Design First workflow, and simplify your Laravel code by not having to repeat your API contract in validation and contract testing as well as documentation. Just do it once, make easy code, then pop it all onto Bump.sh to have [great API documentation](https://bump.sh/bump-examples/hub/code-samples/doc/laravel-design-first).

## Usage

Clone the repository down to give it a try.

```
# Set everything up
$ composer install

# Start the server
$ php artisan serve

# Poke the API and get automated  errors
$ curl -X POST http://localhost:8000/api/widgets \
    -H "Content-Type: application/json" \
    -d '{"name" : "Replicator"}'

{
  "errors": {
    "requestBody": [
      "description is a required field"
    ]
  },
  "title": "Request payload failed validation",
  "type": "about:blank",
  "status": 400
}
```

Give it a try, play around with the OpenAPI, and see how it responds to different scenarios. 

Then you can run `composer test` to see if the API responses match what OpenAPI expect, which when implemented in your application will help make sure your API is actually doing what your docs are saying, or make sure your docs are saying what your API is doing, whichever way round you prefer to think of it.

Preview how the API reference docs look [on Bump.sh](https://bump.sh/bump-examples/hub/code-samples/doc/laravel-design-first).
