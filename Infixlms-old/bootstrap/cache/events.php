<?php return array (
  'App\\Providers\\EventServiceProvider' => 
  array (
    'Illuminate\\Auth\\Events\\Registered' => 
    array (
      0 => 'Illuminate\\Auth\\Listeners\\SendEmailVerificationNotification',
    ),
    'App\\Events\\OneToOneConnection' => 
    array (
      0 => 'App\\Listeners\\ListenOneToOneConnection',
    ),
    'App\\Events\\LastActivityEvent' => 
    array (
      0 => 'App\\Listeners\\LastActivityListener',
    ),
    'App\\Providers\\GroupMemberCreate' => 
    array (
      0 => 'Modules\\Group\\Listeners\\GroupMemberCreateListener',
    ),
    'Modules\\Affiliate\\Events\\CheckAffiliateLink' => 
    array (
      0 => 'Modules\\Affiliate\\Listeners\\CheckAffiliateLinkListener',
    ),
    'Modules\\Affiliate\\Events\\ReferralPayment' => 
    array (
      0 => 'Modules\\Affiliate\\Listeners\\ReferralPaymentListener',
    ),
  ),
);