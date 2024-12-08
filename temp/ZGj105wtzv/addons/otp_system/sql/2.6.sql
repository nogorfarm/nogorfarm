INSERT INTO `sms_templates` (`id`, `identifier`, `sms_body`, `template_id`, `status`, `created_at`, `updated_at`) 
VALUES 
(NULL, 'account_opening', 'Hi! An account has been created on [[site_name]]. Your account type is: [[user_type]], password is: [[password]] and the verification code is [[code]] .', NULL, '1', current_timestamp(), current_timestamp());

COMMIT;
