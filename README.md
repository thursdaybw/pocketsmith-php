# thursdaybw/pocketsmith-php

The PocketSmith API

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/thursdaybw/pocketsmith-php.git"
    }
  ],
  "require": {
    "thursdaybw/pocketsmith-api": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: developerKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Developer-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Developer-Key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 42; // int | The unique identifier of the account.

try {
    $apiInstance->accountsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsIdDelete: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.pocketsmith.com/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**accountsIdDelete**](docs/Api/AccountsApi.md#accountsiddelete) | **DELETE** /accounts/{id} | Delete account
*AccountsApi* | [**accountsIdGet**](docs/Api/AccountsApi.md#accountsidget) | **GET** /accounts/{id} | Get account
*AccountsApi* | [**accountsIdPut**](docs/Api/AccountsApi.md#accountsidput) | **PUT** /accounts/{id} | Update account
*AccountsApi* | [**institutionsIdAccountsGet**](docs/Api/AccountsApi.md#institutionsidaccountsget) | **GET** /institutions/{id}/accounts | List accounts in institution
*AccountsApi* | [**usersIdAccountsGet**](docs/Api/AccountsApi.md#usersidaccountsget) | **GET** /users/{id}/accounts | List accounts in user
*AccountsApi* | [**usersIdAccountsPost**](docs/Api/AccountsApi.md#usersidaccountspost) | **POST** /users/{id}/accounts | Create an account in user
*AccountsApi* | [**usersIdAccountsPut**](docs/Api/AccountsApi.md#usersidaccountsput) | **PUT** /users/{id}/accounts | Update the display order of accounts in user
*AttachmentsApi* | [**attachmentsIdDelete**](docs/Api/AttachmentsApi.md#attachmentsiddelete) | **DELETE** /attachments/{id} | Delete attachment
*AttachmentsApi* | [**attachmentsIdGet**](docs/Api/AttachmentsApi.md#attachmentsidget) | **GET** /attachments/{id} | Get attachment
*AttachmentsApi* | [**attachmentsIdPut**](docs/Api/AttachmentsApi.md#attachmentsidput) | **PUT** /attachments/{id} | Update attachment
*AttachmentsApi* | [**transactionsIdAttachmentsGet**](docs/Api/AttachmentsApi.md#transactionsidattachmentsget) | **GET** /transactions/{id}/attachments | List attachments in transaction
*AttachmentsApi* | [**transactionsIdAttachmentsPost**](docs/Api/AttachmentsApi.md#transactionsidattachmentspost) | **POST** /transactions/{id}/attachments | Assigns attachment to transaction
*AttachmentsApi* | [**transactionsTransactionIdAttachmentsAttachmentIdDelete**](docs/Api/AttachmentsApi.md#transactionstransactionidattachmentsattachmentiddelete) | **DELETE** /transactions/{transaction_id}/attachments/{attachment_id} | Unassigns attachment in transaction
*AttachmentsApi* | [**usersIdAttachmentsGet**](docs/Api/AttachmentsApi.md#usersidattachmentsget) | **GET** /users/{id}/attachments | Lists attachments in user
*AttachmentsApi* | [**usersIdAttachmentsPost**](docs/Api/AttachmentsApi.md#usersidattachmentspost) | **POST** /users/{id}/attachments | Create attachment in user
*BudgetingApi* | [**usersIdBudgetGet**](docs/Api/BudgetingApi.md#usersidbudgetget) | **GET** /users/{id}/budget | List budget for user
*BudgetingApi* | [**usersIdBudgetSummaryGet**](docs/Api/BudgetingApi.md#usersidbudgetsummaryget) | **GET** /users/{id}/budget_summary | Get budget summary for user
*BudgetingApi* | [**usersIdForecastCacheDelete**](docs/Api/BudgetingApi.md#usersidforecastcachedelete) | **DELETE** /users/{id}/forecast_cache | Delete forecast cache for user
*BudgetingApi* | [**usersIdTrendAnalysisGet**](docs/Api/BudgetingApi.md#usersidtrendanalysisget) | **GET** /users/{id}/trend_analysis | Get trend analysis for user
*CategoriesApi* | [**categoriesIdDelete**](docs/Api/CategoriesApi.md#categoriesiddelete) | **DELETE** /categories/{id} | Delete category
*CategoriesApi* | [**categoriesIdGet**](docs/Api/CategoriesApi.md#categoriesidget) | **GET** /categories/{id} | Get category
*CategoriesApi* | [**categoriesIdPut**](docs/Api/CategoriesApi.md#categoriesidput) | **PUT** /categories/{id} | Update category
*CategoriesApi* | [**usersIdCategoriesGet**](docs/Api/CategoriesApi.md#usersidcategoriesget) | **GET** /users/{id}/categories | List categories in user
*CategoriesApi* | [**usersIdCategoriesPost**](docs/Api/CategoriesApi.md#usersidcategoriespost) | **POST** /users/{id}/categories | Create category in user
*CategoryRulesApi* | [**categoriesIdCategoryRulesPost**](docs/Api/CategoryRulesApi.md#categoriesidcategoryrulespost) | **POST** /categories/{id}/category_rules | Create category rule in category
*CategoryRulesApi* | [**usersIdCategoryRulesGet**](docs/Api/CategoryRulesApi.md#usersidcategoryrulesget) | **GET** /users/{id}/category_rules | List category rules in user
*CurrenciesApi* | [**currenciesGet**](docs/Api/CurrenciesApi.md#currenciesget) | **GET** /currencies | List currencies
*CurrenciesApi* | [**currenciesIdGet**](docs/Api/CurrenciesApi.md#currenciesidget) | **GET** /currencies/{id} | Get currency
*EventsApi* | [**eventsIdDelete**](docs/Api/EventsApi.md#eventsiddelete) | **DELETE** /events/{id} | Delete event
*EventsApi* | [**eventsIdGet**](docs/Api/EventsApi.md#eventsidget) | **GET** /events/{id} | Get event
*EventsApi* | [**eventsIdPut**](docs/Api/EventsApi.md#eventsidput) | **PUT** /events/{id} | Update event
*EventsApi* | [**scenariosIdEventsGet**](docs/Api/EventsApi.md#scenariosideventsget) | **GET** /scenarios/{id}/events | List events in scenario.
*EventsApi* | [**scenariosIdEventsPost**](docs/Api/EventsApi.md#scenariosideventspost) | **POST** /scenarios/{id}/events | Create event in scenario
*EventsApi* | [**usersIdEventsGet**](docs/Api/EventsApi.md#usersideventsget) | **GET** /users/{id}/events | List events in user.
*InstitutionsApi* | [**institutionsIdDelete**](docs/Api/InstitutionsApi.md#institutionsiddelete) | **DELETE** /institutions/{id} | Delete institution
*InstitutionsApi* | [**institutionsIdGet**](docs/Api/InstitutionsApi.md#institutionsidget) | **GET** /institutions/{id} | Get institution
*InstitutionsApi* | [**institutionsIdPut**](docs/Api/InstitutionsApi.md#institutionsidput) | **PUT** /institutions/{id} | Update institution
*InstitutionsApi* | [**usersIdInstitutionsGet**](docs/Api/InstitutionsApi.md#usersidinstitutionsget) | **GET** /users/{id}/institutions | List institutions in user
*InstitutionsApi* | [**usersIdInstitutionsPost**](docs/Api/InstitutionsApi.md#usersidinstitutionspost) | **POST** /users/{id}/institutions | Create institution in user
*LabelsApi* | [**usersIdLabelsGet**](docs/Api/LabelsApi.md#usersidlabelsget) | **GET** /users/{id}/labels | List labels in user
*SavedSearchesApi* | [**usersIdSavedSearchesGet**](docs/Api/SavedSearchesApi.md#usersidsavedsearchesget) | **GET** /users/{id}/saved_searches | List saved searches in user
*TimeZonesApi* | [**timeZonesGet**](docs/Api/TimeZonesApi.md#timezonesget) | **GET** /time_zones | List time zones
*TransactionAccountsApi* | [**transactionAccountsIdGet**](docs/Api/TransactionAccountsApi.md#transactionaccountsidget) | **GET** /transaction_accounts/{id} | Get transaction account
*TransactionAccountsApi* | [**transactionAccountsIdPut**](docs/Api/TransactionAccountsApi.md#transactionaccountsidput) | **PUT** /transaction_accounts/{id} | Update transaction account
*TransactionAccountsApi* | [**usersIdTransactionAccountsGet**](docs/Api/TransactionAccountsApi.md#usersidtransactionaccountsget) | **GET** /users/{id}/transaction_accounts | List transaction accounts in user
*TransactionsApi* | [**accountsIdTransactionsGet**](docs/Api/TransactionsApi.md#accountsidtransactionsget) | **GET** /accounts/{id}/transactions | List transactions in account
*TransactionsApi* | [**categoriesIdTransactionsGet**](docs/Api/TransactionsApi.md#categoriesidtransactionsget) | **GET** /categories/{id}/transactions | List transactions in categories
*TransactionsApi* | [**transactionAccountsIdTransactionsGet**](docs/Api/TransactionsApi.md#transactionaccountsidtransactionsget) | **GET** /transaction_accounts/{id}/transactions | List transactions in transaction account
*TransactionsApi* | [**transactionAccountsIdTransactionsPost**](docs/Api/TransactionsApi.md#transactionaccountsidtransactionspost) | **POST** /transaction_accounts/{id}/transactions | Create a transaction in transaction account
*TransactionsApi* | [**transactionsIdDelete**](docs/Api/TransactionsApi.md#transactionsiddelete) | **DELETE** /transactions/{id} | Delete transaction
*TransactionsApi* | [**transactionsIdGet**](docs/Api/TransactionsApi.md#transactionsidget) | **GET** /transactions/{id} | Get a transaction
*TransactionsApi* | [**transactionsIdPut**](docs/Api/TransactionsApi.md#transactionsidput) | **PUT** /transactions/{id} | Update a transaction
*TransactionsApi* | [**usersIdTransactionsGet**](docs/Api/TransactionsApi.md#usersidtransactionsget) | **GET** /users/{id}/transactions | List transactions in user
*UsersApi* | [**meGet**](docs/Api/UsersApi.md#meget) | **GET** /me | Get the authorised user
*UsersApi* | [**usersIdGet**](docs/Api/UsersApi.md#usersidget) | **GET** /users/{id} | Get user
*UsersApi* | [**usersIdPut**](docs/Api/UsersApi.md#usersidput) | **PUT** /users/{id} | Update user

## Models

- [Account](docs/Model/Account.md)
- [AccountsIdPutRequest](docs/Model/AccountsIdPutRequest.md)
- [Attachment](docs/Model/Attachment.md)
- [AttachmentContentTypeMeta](docs/Model/AttachmentContentTypeMeta.md)
- [AttachmentVariants](docs/Model/AttachmentVariants.md)
- [AttachmentsIdPutRequest](docs/Model/AttachmentsIdPutRequest.md)
- [BudgetAnalysis](docs/Model/BudgetAnalysis.md)
- [BudgetAnalysisPackage](docs/Model/BudgetAnalysisPackage.md)
- [CategoriesIdCategoryRulesPostRequest](docs/Model/CategoriesIdCategoryRulesPostRequest.md)
- [CategoriesIdPutRequest](docs/Model/CategoriesIdPutRequest.md)
- [Category](docs/Model/Category.md)
- [CategoryRule](docs/Model/CategoryRule.md)
- [Currency](docs/Model/Currency.md)
- [CurrencySeparators](docs/Model/CurrencySeparators.md)
- [Error](docs/Model/Error.md)
- [Event](docs/Model/Event.md)
- [EventsIdPutRequest](docs/Model/EventsIdPutRequest.md)
- [Institution](docs/Model/Institution.md)
- [InstitutionsIdPutRequest](docs/Model/InstitutionsIdPutRequest.md)
- [Period](docs/Model/Period.md)
- [SavedSearch](docs/Model/SavedSearch.md)
- [Scenario](docs/Model/Scenario.md)
- [ScenariosIdEventsPostRequest](docs/Model/ScenariosIdEventsPostRequest.md)
- [TimeZone](docs/Model/TimeZone.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionAccount](docs/Model/TransactionAccount.md)
- [TransactionAccountsIdPutRequest](docs/Model/TransactionAccountsIdPutRequest.md)
- [TransactionAccountsIdTransactionsPostRequest](docs/Model/TransactionAccountsIdTransactionsPostRequest.md)
- [TransactionsIdAttachmentsPostRequest](docs/Model/TransactionsIdAttachmentsPostRequest.md)
- [TransactionsIdPutRequest](docs/Model/TransactionsIdPutRequest.md)
- [User](docs/Model/User.md)
- [UsersIdAccountsPostRequest](docs/Model/UsersIdAccountsPostRequest.md)
- [UsersIdAccountsPutRequest](docs/Model/UsersIdAccountsPutRequest.md)
- [UsersIdAttachmentsPostRequest](docs/Model/UsersIdAttachmentsPostRequest.md)
- [UsersIdCategoriesPostRequest](docs/Model/UsersIdCategoriesPostRequest.md)
- [UsersIdInstitutionsPostRequest](docs/Model/UsersIdInstitutionsPostRequest.md)
- [UsersIdPutRequest](docs/Model/UsersIdPutRequest.md)

## Authorization

Authentication schemes defined for the API:
### developerKey

- **Type**: API key
- **API key parameter name**: X-Developer-Key
- **Location**: HTTP header


### oauth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://my.pocketsmith.com/oauth/authorize`
- **Scopes**: 
    - **user.read**: Access the user's details and preferences
    - **user.write**: Access to change the user's details and preferences
    - **accounts.read**: Access to list and view transaction accounts
    - **accounts.write**: Access to update and delete transaction accounts
    - **transactions.read**: Access to list and view accounts and transactions
    - **transactions.write**: Access to create, update and delete transactions
    - **categories.read**: Access to view categories
    - **categories.write**: Ability to edit and delete categories
    - **attachments.read**: Access to view attachments
    - **attachments.write**: Ability to create, update and delete attachments
    - **events.read**: Access to view events
    - **events.write**: Ability to create, update and delete events

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

api@pocketsmith.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
