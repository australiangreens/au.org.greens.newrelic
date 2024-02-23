<?php

require_once 'newrelic.civix.php';
// phpcs:disable
use CRM_Newrelic_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function newrelic_civicrm_config(&$config) {
  _newrelic_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function newrelic_civicrm_install() {
  _newrelic_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function newrelic_civicrm_enable() {
  _newrelic_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_unhandled_exception().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_unhandledException
 */
function newrelic_civicrm_unhandled_exception($exception, $request = NULL) {
  // Don't do anything if the New Relic PHP library is not loaded.
  if (!function_exists('newrelic_notice_error')) {
    return;
  }
  // Forward the exception to New Relic.
  newrelic_notice_error($exception);
}
