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
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function newrelic_civicrm_postInstall() {
  _newrelic_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function newrelic_civicrm_uninstall() {
  _newrelic_civix_civicrm_uninstall();
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
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function newrelic_civicrm_disable() {
  _newrelic_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function newrelic_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _newrelic_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function newrelic_civicrm_entityTypes(&$entityTypes) {
  _newrelic_civix_civicrm_entityTypes($entityTypes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_unhandledException().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_unhandledException
 */
function newrelic_civicrm_unhandledException($exception, $request = NULL) {
  // Don't do anything if the New Relic PHP library is not loaded.
  if (!function_exists('newrelic_notice_error')) {
    return;
  }
  // Forward the exception to New Relic.
  newrelic_notice_error($exception);
}
