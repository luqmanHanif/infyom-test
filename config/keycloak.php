<?php
/**
 * Created by PhpStorm.
 * User: cachak
 * Date: 10/18/20
 * Time: 6:06 AM
 */


return [
  'users' => env('KEYCLOAK_USERS', 'keycloak-users'),
  'auth_web_guard' => env('KEYCLOAK_AUTH_WEB_GUARD', 'keycloak-web'),
  'auth_api_guard' => env('KEYCLOAK_AUTH_API_GUARD', 'keycloak-api'),
  'gate' => env('KEYCLOAK_GATE', 'sec'),
  'facades' => env('KEYCLOAK_FACADES', 'keycloak-web'),
  'middleware' => env('KEYCLOAK_MIDDLEWARE', 'sec'),
  'middleware-alias' => env('KEYCLOAK_MIDDLEWARE_ALIAS', 'sec-can'),
  /**
   * Keycloak Url
   *
   * Generally https://your-server.com/auth
   */
  'base_url' => env('KEYCLOAK_BASE_URL', 'http://localhost:8080/auth'),

  /**
   * Keycloak Realm
   *
   * Default is master
   */
  'realm' => env('KEYCLOAK_REALM', 'myindo'),

  /**
   * The Keycloak Server realm public key (string).
   *
   * @see Keycloak >> Realm Settings >> Keys >> RS256 >> Public Key
   */
  'realm_public_key' => env('KEYCLOAK_REALM_PUBLIC_KEY', null),

  /**
   * Keycloak Client ID
   *
   * @see Keycloak >> Clients >> Installation
   */
  'client_id' => env('KEYCLOAK_CLIENT_ID', null),

  /**
   * Keycloak Client Secret
   *
   * @see Keycloak >> Clients >> Installation
   */
  'client_secret' => env('KEYCLOAK_CLIENT_SECRET', null),

  /**
   * We can cache the OpenId Configuration
   * The result from /realms/{realm-name}/.well-known/openid-configuration
   *
   * @link https://www.keycloak.org/docs/3.2/securing_apps/topics/oidc/oidc-generic.html
   */
  'cache_openid' => env('KEYCLOAK_CACHE_OPENID', false),
  'load_user_from_database' => false,
  'user_provider_credential' => 'username',
  'token_principal_attribute' => 'preferred_username',
  'append_decoded_token' => false,
  'allowed_resources' => 'account',

  /**
   * Page to redirect after callback if there's no "intent"
   *
   * @see Vizir\KeycloakWebGuard\Controllers\AuthController::callback()
   */
  'redirect_url' => '/admin',

  /**
   * The routes for authenticate
   *
   * Accept a string as the first parameter of route() or false to disable the route.
   *
   * The routes will receive the name "keycloak.{route}" and login/callback are required.
   * So, if you make it false, you shoul register a named 'keycloak.login' route and extend
   * the Vizir\KeycloakWebGuard\Controllers\AuthController controller.
   */
  'routes' => [
    'login' => 'login',
    'logout' => 'logout',
    'register' => 'register',
    'callback' => 'callback',
    'noaccess' => 'noaccess',
  ],

  /**
   * GuzzleHttp Client options
   *
   * @link http://docs.guzzlephp.org/en/stable/request-options.html
   */
  'guzzle_options' => [],
];