<?php

declare(strict_types=1);

/* For licensing terms, see /license.txt */

namespace Chamilo\CoreBundle\DataFixtures;

use Chamilo\CoreBundle\Entity\ExtraField;
use Chamilo\CoreBundle\Entity\ExtraFieldOptions;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class ExtraFieldFixtures extends Fixture implements FixtureGroupInterface
{
    public static function getGroups(): array
    {
        return ['extrafield-update'];
    }

    public static function getExtraFields(): array
    {
        return [
            [
                'variable' => 'legal_accept',
                'display_text' => 'Legal',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'already_logged_in',
                'display_text' => 'Already logged in',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'update_type',
                'display_text' => 'Update script type',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'tags',
                'display_text' => 'tags',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TAG,
            ],
            [
                'variable' => 'rssfeeds',
                'display_text' => 'RSS',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'dashboard',
                'display_text' => 'Dashboard',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'user_chat_status',
                'display_text' => 'User chat status',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'google_calendar_url',
                'display_text' => 'Google Calendar URL',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'captcha_blocked_until_date',
                'display_text' => 'Account locked until',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
            ],
            [
                'variable' => 'special_course',
                'display_text' => 'Special course',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'tags',
                'display_text' => 'Tags',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TAG,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'video_url',
                'display_text' => 'VideoUrl',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'image',
                'display_text' => 'Image',
                'item_type' => ExtraField::SESSION_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_FILE_IMAGE,
                'visible_to_self' => true,
                'changeable' => true,
            ],

            [
                'variable' => 'mail_notify_invitation',
                'display_text' => 'MailNotifyInvitation',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_SELECT,
                'visible_to_self' => true,
                'default_value' => 1,
                'add_options' => true,
            ],
            [
                'variable' => 'mail_notify_message',
                'display_text' => 'MailNotifyMessage',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_SELECT,
                'visible_to_self' => true,
                'default_value' => 1,
                'add_options' => true,
            ],
            [
                'variable' => 'mail_notify_group_message',
                'display_text' => 'MailNotifyGroupMessage',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_SELECT,
                'visible_to_self' => true,
                'default_value' => 1,
                'add_options' => true,
            ],
            [
                'variable' => 'skype',
                'display_text' => 'Skype',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'linkedin_url',
                'display_text' => 'LinkedInUrl',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'tags',
                'display_text' => 'Tags',
                'item_type' => ExtraField::SKILL_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TAG,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'send_notification_at_a_specific_date',
                'display_text' => 'Send notification at a specific date',
                'item_type' => ExtraField::COURSE_ANNOUNCEMENT,
                'value_type' => ExtraField::FIELD_TYPE_DATE,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'date_to_send_notification',
                'display_text' => 'Date to send notification',
                'item_type' => ExtraField::COURSE_ANNOUNCEMENT,
                'value_type' => ExtraField::FIELD_TYPE_DATE,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'send_to_users_in_session',
                'display_text' => 'Send to users in session',
                'item_type' => ExtraField::SESSION_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'session_courses_read_only_mode',
                'display_text' => 'Lock Course In Session',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'is_mandatory',
                'display_text' => 'Is Mandatory',
                'item_type' => ExtraField::SURVEY_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'show_in_catalogue',
                'display_text' => 'Show in Catalogue',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_RADIO,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'multiple_language',
                'display_text' => 'Multiple Language',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_SELECT_MULTIPLE,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'acquisition',
                'display_text' => 'Acquisition',
                'item_type' => ExtraField::LP_VIEW_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_RADIO,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'invisible',
                'display_text' => 'Invisible',
                'item_type' => ExtraField::LP_VIEW_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'start_date',
                'display_text' => 'Start Date',
                'item_type' => ExtraField::LP_ITEM_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_DATETIME,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'end_date',
                'display_text' => 'End Date',
                'item_type' => ExtraField::LP_ITEM_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_DATETIME,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'attachment',
                'display_text' => 'Attachment',
                'item_type' => ExtraField::SCHEDULED_ANNOUNCEMENT,
                'value_type' => ExtraField::FIELD_TYPE_FILE,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'send_to_coaches',
                'display_text' => 'Send to Coaches',
                'item_type' => ExtraField::SCHEDULED_ANNOUNCEMENT,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'work_time',
                'display_text' => 'Considered working time',
                'item_type' => ExtraField::WORK_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_INTEGER,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'address',
                'display_text' => 'User address',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'advancedcourselist',
                'display_text' => 'Advanced Course List',
                'item_type' => ExtraField::EXERCISE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_SELECT_MULTIPLE,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'ask_for_revision',
                'display_text' => 'Ask for Revision',
                'item_type' => ExtraField::FORUM_POST_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'ask_new_password',
                'display_text' => 'Ask New Password',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'authenticationDate',
                'display_text' => 'Authentication Date',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_DATETIME,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'authenticationMethod',
                'display_text' => 'Authentication Method',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'azure_id',
                'display_text' => 'Azure ID',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'birthday',
                'display_text' => 'Birthday',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_DATE,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'block_category',
                'display_text' => 'Block Category',
                'item_type' => ExtraField::EXERCISE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'buycourses_company',
                'display_text' => 'BuyCourses Company',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'buycourses_vat',
                'display_text' => 'BuyCourses VAT',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'buycourses_address',
                'display_text' => 'BuyCourses Address',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'cas_user',
                'display_text' => 'CAS User',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'careerid',
                'display_text' => 'Career ID',
                'item_type' => ExtraField::CAREER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_INTEGER,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'career_urls',
                'display_text' => 'Career URLs',
                'item_type' => ExtraField::CAREER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'career_diagram',
                'display_text' => 'Career Diagram',
                'item_type' => ExtraField::CAREER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'collapsed',
                'display_text' => 'Collapsed',
                'item_type' => ExtraField::SESSION_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'ConsideredWorkingTime',
                'display_text' => 'Considered Working Time',
                'item_type' => ExtraField::WORK_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'created_by',
                'display_text' => 'Created By',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'credentialType',
                'display_text' => 'Credential Type',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'differentiation',
                'display_text' => 'Differentiation',
                'item_type' => ExtraField::QUESTION_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'disable_emails',
                'display_text' => 'Disable Emails',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'disable_import_calendar',
                'display_text' => 'Disable Import Calendar',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'downloaded_at',
                'display_text' => 'Downloaded At',
                'item_type' => ExtraField::USER_CERTIFICATE,
                'value_type' => ExtraField::FIELD_TYPE_DATETIME,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'drupal_user_id',
                'display_text' => 'Drupal User ID',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'etat',
                'display_text' => 'State',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'end_pause_date',
                'display_text' => 'End Pause Date',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_DATETIME,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'gdpr',
                'display_text' => 'GDPR Compliance',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'isFromNewLogin',
                'display_text' => 'Is From New Login',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'language',
                'display_text' => 'Language',
                'item_type' => ExtraField::FORUM_CATEGORY_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'longTermAuthenticationRequestTokenUsed',
                'display_text' => 'Long Term Authentication Request Token Used',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'moodle_password',
                'display_text' => 'Moodle Password',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'multilingual',
                'display_text' => 'Multilingual',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'my_terms',
                'display_text' => 'My Terms',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'new_tracking_system',
                'display_text' => 'New Tracking System',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'nif',
                'display_text' => 'NIF',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'niveau',
                'display_text' => 'Level',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'no_automatic_validation',
                'display_text' => 'No Automatic Validation',
                'item_type' => ExtraField::LP_ITEM_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'notification_event',
                'display_text' => 'Notification Event',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'notifications',
                'display_text' => 'Notifications',
                'item_type' => ExtraField::EXERCISE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'number_of_days_for_completion',
                'display_text' => 'Number of Days for Completion',
                'item_type' => ExtraField::LP_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'oauth2_id',
                'display_text' => 'OAuth2 ID',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'office_address',
                'display_text' => 'Office Address',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'office_phone_extension',
                'display_text' => 'Office Phone Extension',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'organisationemail',
                'display_text' => 'Organisation Email',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'pause_formation',
                'display_text' => 'Pause Formation',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'popular_courses',
                'display_text' => 'Popular Courses',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'plugin_bbb_course_users_limit',
                'display_text' => 'BigBlueButton Course Users Limit',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_INTEGER,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'plugin_bbb_session_users_limit',
                'display_text' => 'BigBlueButton Session Users Limit',
                'item_type' => ExtraField::SESSION_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_INTEGER,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'qualite',
                'display_text' => 'Quality',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'remedialcourselist',
                'display_text' => 'Remedial Course List',
                'item_type' => ExtraField::COURSE_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'request_for_delete_account',
                'display_text' => 'Request for Delete Account',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'request_for_delete_account_justification',
                'display_text' => 'Justification for Account Deletion',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXTAREA,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'request_for_legal_agreement_consent_removal',
                'display_text' => 'Request for Legal Agreement Consent Removal',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'request_for_legal_agreement_consent_removal_justification',
                'display_text' => 'Justification for Consent Removal',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXTAREA,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'revision_language',
                'display_text' => 'Revision Language',
                'item_type' => ExtraField::FORUM_POST_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'ruc',
                'display_text' => 'RUC (Tax ID)',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'session_career',
                'display_text' => 'Session Career Link',
                'item_type' => ExtraField::SESSION_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_INTEGER,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'successful_AuthenticationHandlers',
                'display_text' => 'Successful Authentication Handlers',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'termactivated',
                'display_text' => 'Term Activated',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'terms_villedustage',
                'display_text' => 'Terms City of Internship',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],

            [
                'variable' => 'timezone',
                'display_text' => 'Timezone',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'uid',
                'display_text' => 'UID',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'use_score_as_progress',
                'display_text' => 'Use Score as Progress',
                'item_type' => ExtraField::LP_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'whispeak_auth_uid',
                'display_text' => 'Whispeak Auth UID',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'whispeak_lp_item',
                'display_text' => 'Whispeak Learning Path Item',
                'item_type' => ExtraField::LP_ITEM_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'whispeak_quiz_question',
                'display_text' => 'Whispeak Quiz Question',
                'item_type' => ExtraField::QUESTION_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_CHECKBOX,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'terms_ville',
                'display_text' => 'Terms City',
                'item_type' => ExtraField::USER_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_TEXT,
                'visible_to_self' => true,
                'changeable' => true,
            ],
            [
                'variable' => 'time',
                'display_text' => 'Time',
                'item_type' => ExtraField::QUESTION_FIELD_TYPE,
                'value_type' => ExtraField::FIELD_TYPE_INTEGER,
                'visible_to_self' => true,
                'changeable' => true,
            ],
        ];
    }

    public function load(ObjectManager $manager): void
    {
        $list = self::getExtraFields();

        foreach ($list as $data) {
            $existingField = $manager->getRepository(ExtraField::class)->findOneBy([
                'variable' => $data['variable'],
                'itemType' => $data['item_type'],
            ]);

            if (!$existingField) {
                $extraField = new ExtraField();
                $extraField->setVariable($data['variable'])
                    ->setDisplayText($data['display_text'])
                    ->setItemType($data['item_type'])
                    ->setValueType($data['value_type'])
                    ->setChangeable($data['changeable'] ?? false)
                    ->setVisibleToSelf($data['visible_to_self'] ?? false);

                if (isset($data['default_value'])) {
                    $extraField->setDefaultValue((string) $data['default_value']);
                }

                if (isset($data['add_options']) && $data['add_options']) {
                    $options = ['At once', 'Daily', 'No'];
                    foreach ($options as $option) {
                        $extraFieldOption = new ExtraFieldOptions();
                        $extraFieldOption->setField($extraField)
                            ->setDisplayText($option)
                            ->setOptionOrder(array_search($option, $options) + 1);

                        $manager->persist($extraFieldOption);
                    }
                }

                $manager->persist($extraField);
            }
        }

        $manager->flush();
    }
}
