<?php

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WFSMVZ6iv7O0IHqW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AJo3PDS0rTmOM0uk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aXu8Yha1LjMOpWnb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8jTrwDrxMVio2xZs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/get-format' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tOAmNO17QgSNmImG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/get-topic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tz51mNLw2Tjv0uz4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/events-upcoming' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JTvZxuUZnYCUfU87',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/slides' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jg8goBdwPFZZF0E8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/event-online' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t83zNJ43lPH4kpPh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/event-other' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WSHIsc7fB4bEOeOM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/get-formats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R7eITNRIA9s0Jxt9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/top-event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1TRYUvb0GkltPHK2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/explore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FJ9UiYq106SLZ8vW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::46QsPef5SSltH30U',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UV4BFCk7hycUCr1O',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users/me' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mEMW9T6V4wu0edsy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lrOF874K15ogDJs0',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mRDmvSVxa2n6KJ6x',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wSE2O71kEMKuD0PV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/organizers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Rl0XJCJZaABFbnXZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9n9Jtl6HFCZDAjYf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NrbEbgBYVCznZI8V',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tEXReVexxSAYmNEJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/buyer/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vQG4GgdRTWQ7xKyu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/buyer/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OxJ7F1aEP6dXqkmc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/buyer/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buyer.password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/buyer/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buyer.password.reset',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/buyer/email/resend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buyer.verification.resend',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/email-organizer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DW9MyGXKT9QsCC8B',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::osSqYia8qx45wYae',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/buyer/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AvCDq3U4HiYdh8ws',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/webhooks/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JnolqPlrOFpHQlzC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/public/webhooks/midtrans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KvBck11mboWn0hDn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mail-test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lLyEHT3AOYosY5cx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CmSflauFub54lqHr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|uth/(?|invitation/([^/]++)(?|(*:41))|reset\\-password/([^/]++)(?|(*:76)))|ccounts(?|(?:/([^/]++))?(?|(*:112))|/([^/]++)/(?|stripe/connect(*:148)|taxes\\-and\\-fees(?|(*:175)|/([^/]++)(?|(*:195))))))|/public/(?|event(?|/([^/]++)(*:236)|s/([^/]++)(?|/(?|t(?|ransactions(*:276)|ickets(*:290))|order(?|(*:307)|/([^/]++)(?|(*:327)|/stripe/payment_intent(?|(*:360))))|attendees/([^/]++)(*:389)|promo\\-codes/([^/]++)(*:418)|questions(*:435))|(*:444)))|buyer/(?|reset\\-password/([^/]++)(*:487)|email/verify/([^/]++)/([^/]++)(*:525)|orders/([^/]++)(*:548))|check\\-in\\-lists/([^/]++)(?|(*:585)|/(?|attendees(*:606)|check\\-ins(?|(*:627)|/([^/]++)(*:644)))))|/users/([^/]++)(?|(*:674)|/(?|email\\-change(?|/([^/]++)(*:711)|(*:719))|invitation(?|(*:741))|confirm\\-email/([^/]++)(*:773)|resend\\-email\\-confirmation(*:808)))|/organizers/([^/]++)(?|(*:841)|/events(*:856))|/events/([^/]++)(?|(*:884)|/(?|s(?|tat(?|us(*:908)|s(*:917))|ettings(?|(*:936)))|duplicate(*:955)|tickets(?|(*:973)|/(?|sort(*:989)|([^/]++)(?|(*:1008)))|(*:1019))|c(?|heck(?|_in_stats(*:1049)|\\-in\\-lists(?|(*:1072)|/([^/]++)(?|(*:1093))))|apacity\\-assignments(?|(*:1128)|/([^/]++)(?|(*:1149))))|attendees(?|(*:1173)|/(?|([^/]++)(?|(*:1197))|export(*:1213)|([^/]++)/(?|resend\\-ticket(*:1248)|check_in(*:1265))))|orders(?|(*:1286)|/(?|([^/]++)(?|(*:1310)|/(?|message(*:1330)|re(?|fund(*:1348)|send_confirmation(*:1374))|cancel(*:1390)))|export(*:1407)))|messages(?|(*:1429))|questions(?|(*:1451)|/(?|([^/]++)(?|(*:1475))|export(*:1491)|sort(*:1504))|(*:1514))|images(?|(*:1533)|/([^/]++)(*:1551))|promo\\-codes(?|(*:1576)|/([^/]++)(?|(*:1597))|(*:1607)))))/?$}sDu',
    ),
    3 => 
    array (
      41 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TTymlD05vXYSzbQe',
          ),
          1 => 
          array (
            0 => 'invite_token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jF4nv1DZPSjwf0SW',
          ),
          1 => 
          array (
            0 => 'invite_token',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      76 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qOFrPVutB34gbMU6',
          ),
          1 => 
          array (
            0 => 'reset_token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7IYApy2F5wYu2EG6',
          ),
          1 => 
          array (
            0 => 'reset_token',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MzEDjUHmM0OsAnav',
            'account_id' => NULL,
          ),
          1 => 
          array (
            0 => 'account_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9eG0g2UIYkGe9xWU',
            'account_id' => NULL,
          ),
          1 => 
          array (
            0 => 'account_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      148 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fbxcCKOOxVo3jROT',
          ),
          1 => 
          array (
            0 => 'account_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cuCB8kf8vHthSCWu',
          ),
          1 => 
          array (
            0 => 'account_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9LW5gsl0S0eSPQEN',
          ),
          1 => 
          array (
            0 => 'account_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c4AoEeULEeAfKkwr',
          ),
          1 => 
          array (
            0 => 'account_id',
            1 => 'tax_or_fee_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zvKPMoY1aVDSOPyS',
          ),
          1 => 
          array (
            0 => 'account_id',
            1 => 'tax_or_fee_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      236 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b7MFQfOlRUdYG70J',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      276 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DLOEg48jYhFeWHmG',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zym3M3PJoSnPR4Fs',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qpm1nmwXBdcXepW7',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      327 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Cq71ny2vmJ6nW8Ba',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'order_short_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PecTB3QQAG56x9VB',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'order_short_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      360 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kKCclKXmJ3IrMnAY',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'order_short_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rhnSoLT1J4avzCyg',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'order_short_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      389 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m6vHSOK6P85l1qve',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'attendee_short_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      418 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::prtaEH6v4colsg95',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'promo_code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QSvTMGPbGfPgJUM0',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      444 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XnQmCbcfDdTwadNy',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      487 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      525 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buyer.verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      548 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CsCxUIpvoR8PWooK',
          ),
          1 => 
          array (
            0 => 'order_short_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      585 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SKJdVZZnBArbCt36',
          ),
          1 => 
          array (
            0 => 'check_in_list_short_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      606 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wMZpWGUmc65hFSOS',
          ),
          1 => 
          array (
            0 => 'check_in_list_short_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      627 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HmjVUkXtxkCwTtCn',
          ),
          1 => 
          array (
            0 => 'check_in_list_short_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gwe9tByJ4ny3bdbf',
          ),
          1 => 
          array (
            0 => 'check_in_list_short_id',
            1 => 'check_in_short_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      674 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8Y0wFdhiVL2fAdhs',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hLSDiPbHjrZfjdLa',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nVs4wYGnMJk90NAX',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gpmeE2PllCbi4G6v',
          ),
          1 => 
          array (
            0 => 'user_id',
            1 => 'token',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9i0l1jTQjmRygK4c',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      741 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WN7uUl5JcmgW6q4U',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7ZEr1Y7xuizFgxw3',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      773 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dHPMscEoyXfrDAT1',
          ),
          1 => 
          array (
            0 => 'user_id',
            1 => 'token',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      808 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GX1Wyqt5jtFhvYEj',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      841 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SWU5CK8FO57ofyWw',
          ),
          1 => 
          array (
            0 => 'organizer_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zT1G0uJdmQI1i6J2',
          ),
          1 => 
          array (
            0 => 'organizer_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      856 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3kdgM7I7jaAcuRwJ',
          ),
          1 => 
          array (
            0 => 'organizer_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      884 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K1HCVEeyxqnWNQwb',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9IcY1KUG7sSuny9E',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      908 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HHMdXaFb2nBTALuq',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kspAWYdrbNRPV6gL',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      936 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jX0TcQc4VVdzb7Ie',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qmIlWMdwbZdTy5kQ',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yHRX3ekp7rvixjmF',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      955 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MB6YFeDmaVB9HykC',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      973 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sxeiYElHcpg4iekD',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      989 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vK7VL2vwCOZpwBE2',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1008 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mxgVs4AqFX0I9kdc',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'ticket_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0NbC7Eqiq0Qttyxn',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'ticket_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BWijknhuWO5iN7fT',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'ticket_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1019 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TYrhzHxjoAzZJw2w',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1049 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i3NtTimqEnL0Pbxl',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1072 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HXFgt6Pg7uSc6JSo',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Nah9rsAtnxpsLMc9',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1093 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4pqJcUigGdT8sIZW',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'check_in_list_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zw29wPjRDWj8IpAC',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'check_in_list_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JpEWlvYxQF84d8d4',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'check_in_list_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1128 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::frUKb2UMCJWSADF6',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TLI8cwMRNeRUZj7G',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U58L6QC3NoBB8EWc',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'capacity_assignment_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gaqBlk40bKeQbGHN',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'capacity_assignment_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2IwkHhz4XaMNVUSi',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'capacity_assignment_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1173 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SR2OHJ2RaTCMEcOq',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hFV5c8owtECGun64',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1197 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XfQ1bJvfnU6anXvB',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'attendee_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I7AwcXe1THZe3K3l',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'attendee_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g1hWABnBYqkPDxjx',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'attendee_id',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1213 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c5MZjNK5phNJLfsV',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1248 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iGMOQBAexFh4iHGD',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'attendee_public_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KzuOjjoQCeQBzgVD',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'attendee_public_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1286 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7oHLacYNZK2h15mL',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1310 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qMinetgyyo8T4J04',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uq9HeySLNwnriDOb',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'order_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d3czJznNGofivDo7',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'order_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1374 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::muB9n9Ch32NZrVGk',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'order_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1390 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rFVS9TwNSqiI5BWr',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'order_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E0kgLHgllhy750pI',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::haSFnGsE67yPrNQQ',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fNHRobyhRhSOPe9J',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bCt9pUTJJ18Iy4Tw',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1475 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hf4xa87L8ygdQ3yn',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'question_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8fM3B7efC65EmJKH',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'question_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1b4cxr30YJiboHmU',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'question_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hUK7QwOarixb0izJ',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1504 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Oqqt3NUMLqYFl0zD',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::52r0p7UOluYimXyt',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1533 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6AJhxq7jmq8z2cuL',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N6gvp6Ky2PdWUw4q',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HgotYdiMpIWePlxV',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'image_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1576 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w2VCReDTHhtljGvk',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9PpOln6PS7Yc4ejy',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'promo_code_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZC9iR0aIvJL94oHF',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'promo_code_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yJ4qb4vmpuGSSqeS',
          ),
          1 => 
          array (
            0 => 'event_id',
            1 => 'promo_code_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1yFU7EAwL8Wt6UgJ',
          ),
          1 => 
          array (
            0 => 'event_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\LoginAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\LoginAction',
        'namespace' => NULL,
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WFSMVZ6iv7O0IHqW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\LogoutAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\LogoutAction',
        'namespace' => NULL,
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::WFSMVZ6iv7O0IHqW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aXu8Yha1LjMOpWnb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'auth/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Accounts\\CreateAccountAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Accounts\\CreateAccountAction',
        'namespace' => NULL,
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::aXu8Yha1LjMOpWnb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8jTrwDrxMVio2xZs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'auth/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\ForgotPasswordAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\ForgotPasswordAction',
        'namespace' => NULL,
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::8jTrwDrxMVio2xZs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TTymlD05vXYSzbQe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/invitation/{invite_token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\GetUserInvitationAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\GetUserInvitationAction',
        'namespace' => NULL,
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::TTymlD05vXYSzbQe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jF4nv1DZPSjwf0SW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'auth/invitation/{invite_token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\AcceptInvitationAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\AcceptInvitationAction',
        'namespace' => NULL,
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::jF4nv1DZPSjwf0SW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qOFrPVutB34gbMU6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/reset-password/{reset_token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\ValidateResetPasswordTokenAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\ValidateResetPasswordTokenAction',
        'namespace' => NULL,
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::qOFrPVutB34gbMU6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7IYApy2F5wYu2EG6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'auth/reset-password/{reset_token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\ResetPasswordAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\ResetPasswordAction',
        'namespace' => NULL,
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::7IYApy2F5wYu2EG6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tOAmNO17QgSNmImG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/get-format',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Category\\GetFormatAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Category\\GetFormatAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tOAmNO17QgSNmImG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tz51mNLw2Tjv0uz4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/get-topic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Category\\GetTopicAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Category\\GetTopicAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Tz51mNLw2Tjv0uz4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JTvZxuUZnYCUfU87' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/events-upcoming',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\EventPublic\\EventPublicList@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\EventPublic\\EventPublicList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JTvZxuUZnYCUfU87',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b7MFQfOlRUdYG70J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/event/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\EventPublic\\EventDetail@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\EventPublic\\EventDetail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::b7MFQfOlRUdYG70J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jg8goBdwPFZZF0E8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/slides',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\EventPublic\\EventHomePage@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\EventPublic\\EventHomePage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Jg8goBdwPFZZF0E8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t83zNJ43lPH4kpPh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/event-online',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\EventPublic\\EventOnline@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\EventPublic\\EventOnline',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::t83zNJ43lPH4kpPh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WSHIsc7fB4bEOeOM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/event-other',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\EventPublic\\EventOther@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\EventPublic\\EventOther',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WSHIsc7fB4bEOeOM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R7eITNRIA9s0Jxt9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/get-formats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Category\\GetFormatWithPagination@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Category\\GetFormatWithPagination',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::R7eITNRIA9s0Jxt9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1TRYUvb0GkltPHK2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/top-event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\EventPublic\\EventTop@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\EventPublic\\EventTop',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1TRYUvb0GkltPHK2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FJ9UiYq106SLZ8vW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/explore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\EventPublic\\FilterPage@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\EventPublic\\FilterPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FJ9UiYq106SLZ8vW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::46QsPef5SSltH30U' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'verify-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\VerificationEmail@verifyEmail',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\VerificationEmail@verifyEmail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::46QsPef5SSltH30U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AJo3PDS0rTmOM0uk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\LogoutAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\LogoutAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AJo3PDS0rTmOM0uk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UV4BFCk7hycUCr1O' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'auth/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\RefreshTokenAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\RefreshTokenAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UV4BFCk7hycUCr1O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mEMW9T6V4wu0edsy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/me',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Users\\GetMeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Users\\GetMeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mEMW9T6V4wu0edsy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lrOF874K15ogDJs0' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'users/me',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Users\\UpdateMeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Users\\UpdateMeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lrOF874K15ogDJs0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mRDmvSVxa2n6KJ6x' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Users\\CreateUserAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Users\\CreateUserAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mRDmvSVxa2n6KJ6x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wSE2O71kEMKuD0PV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Users\\GetUsersAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Users\\GetUsersAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wSE2O71kEMKuD0PV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8Y0wFdhiVL2fAdhs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Users\\GetUserAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Users\\GetUserAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8Y0wFdhiVL2fAdhs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hLSDiPbHjrZfjdLa' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'users/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Users\\UpdateUserAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Users\\UpdateUserAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hLSDiPbHjrZfjdLa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nVs4wYGnMJk90NAX' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'users/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Users\\DeactivateUsersAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Users\\DeactivateUsersAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nVs4wYGnMJk90NAX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gpmeE2PllCbi4G6v' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{user_id}/email-change/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Users\\ConfirmEmailChangeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Users\\ConfirmEmailChangeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gpmeE2PllCbi4G6v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WN7uUl5JcmgW6q4U' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{user_id}/invitation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Users\\ResendInvitationAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Users\\ResendInvitationAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WN7uUl5JcmgW6q4U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7ZEr1Y7xuizFgxw3' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'users/{user_id}/invitation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Users\\DeleteInvitationAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Users\\DeleteInvitationAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7ZEr1Y7xuizFgxw3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9i0l1jTQjmRygK4c' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'users/{user_id}/email-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Users\\CancelEmailChangeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Users\\CancelEmailChangeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9i0l1jTQjmRygK4c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dHPMscEoyXfrDAT1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{user_id}/confirm-email/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Users\\ConfirmEmailAddressAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Users\\ConfirmEmailAddressAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dHPMscEoyXfrDAT1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GX1Wyqt5jtFhvYEj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'users/{user_id}/resend-email-confirmation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Users\\ResendEmailConfirmationAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Users\\ResendEmailConfirmationAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GX1Wyqt5jtFhvYEj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MzEDjUHmM0OsAnav' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'accounts/{account_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Accounts\\GetAccountAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Accounts\\GetAccountAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MzEDjUHmM0OsAnav',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9eG0g2UIYkGe9xWU' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'accounts/{account_id?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Accounts\\UpdateAccountAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Accounts\\UpdateAccountAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9eG0g2UIYkGe9xWU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fbxcCKOOxVo3jROT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'accounts/{account_id}/stripe/connect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Accounts\\Stripe\\CreateStripeConnectAccountAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Accounts\\Stripe\\CreateStripeConnectAccountAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fbxcCKOOxVo3jROT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rl0XJCJZaABFbnXZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'organizers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Organizers\\CreateOrganizerAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Organizers\\CreateOrganizerAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Rl0XJCJZaABFbnXZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SWU5CK8FO57ofyWw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'organizers/{organizer_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Organizers\\EditOrganizerAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Organizers\\EditOrganizerAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SWU5CK8FO57ofyWw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9n9Jtl6HFCZDAjYf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'organizers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Organizers\\GetOrganizersAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Organizers\\GetOrganizersAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9n9Jtl6HFCZDAjYf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zT1G0uJdmQI1i6J2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'organizers/{organizer_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Organizers\\GetOrganizerAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Organizers\\GetOrganizerAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zT1G0uJdmQI1i6J2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3kdgM7I7jaAcuRwJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'organizers/{organizer_id}/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Organizers\\GetOrganizerEventsAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Organizers\\GetOrganizerEventsAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3kdgM7I7jaAcuRwJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cuCB8kf8vHthSCWu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'accounts/{account_id}/taxes-and-fees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\TaxesAndFees\\CreateTaxOrFeeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\TaxesAndFees\\CreateTaxOrFeeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cuCB8kf8vHthSCWu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9LW5gsl0S0eSPQEN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'accounts/{account_id}/taxes-and-fees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\TaxesAndFees\\GetTaxOrFeeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\TaxesAndFees\\GetTaxOrFeeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9LW5gsl0S0eSPQEN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c4AoEeULEeAfKkwr' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'accounts/{account_id}/taxes-and-fees/{tax_or_fee_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\TaxesAndFees\\EditTaxOrFeeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\TaxesAndFees\\EditTaxOrFeeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::c4AoEeULEeAfKkwr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zvKPMoY1aVDSOPyS' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'accounts/{account_id}/taxes-and-fees/{tax_or_fee_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\TaxesAndFees\\DeleteTaxOrFeeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\TaxesAndFees\\DeleteTaxOrFeeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zvKPMoY1aVDSOPyS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NrbEbgBYVCznZI8V' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Events\\CreateEventAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Events\\CreateEventAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NrbEbgBYVCznZI8V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tEXReVexxSAYmNEJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Events\\GetEventsAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Events\\GetEventsAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tEXReVexxSAYmNEJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K1HCVEeyxqnWNQwb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Events\\GetEventAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Events\\GetEventAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::K1HCVEeyxqnWNQwb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9IcY1KUG7sSuny9E' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'events/{event_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Events\\UpdateEventAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Events\\UpdateEventAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9IcY1KUG7sSuny9E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HHMdXaFb2nBTALuq' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'events/{event_id}/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Events\\UpdateEventStatusAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Events\\UpdateEventStatusAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HHMdXaFb2nBTALuq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MB6YFeDmaVB9HykC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/duplicate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Events\\DuplicateEventAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Events\\DuplicateEventAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MB6YFeDmaVB9HykC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sxeiYElHcpg4iekD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Tickets\\CreateTicketAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Tickets\\CreateTicketAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sxeiYElHcpg4iekD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vK7VL2vwCOZpwBE2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/tickets/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Tickets\\SortTicketsAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Tickets\\SortTicketsAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vK7VL2vwCOZpwBE2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mxgVs4AqFX0I9kdc' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'events/{event_id}/tickets/{ticket_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Tickets\\EditTicketAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Tickets\\EditTicketAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mxgVs4AqFX0I9kdc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0NbC7Eqiq0Qttyxn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/tickets/{ticket_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Tickets\\GetTicketAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Tickets\\GetTicketAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0NbC7Eqiq0Qttyxn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BWijknhuWO5iN7fT' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'events/{event_id}/tickets/{ticket_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Tickets\\DeleteTicketAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Tickets\\DeleteTicketAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BWijknhuWO5iN7fT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TYrhzHxjoAzZJw2w' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Tickets\\GetTicketsAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Tickets\\GetTicketsAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TYrhzHxjoAzZJw2w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i3NtTimqEnL0Pbxl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/check_in_stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Events\\Stats\\GetEventCheckInStatsAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Events\\Stats\\GetEventCheckInStatsAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::i3NtTimqEnL0Pbxl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kspAWYdrbNRPV6gL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Events\\Stats\\GetEventStatsAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Events\\Stats\\GetEventStatsAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kspAWYdrbNRPV6gL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SR2OHJ2RaTCMEcOq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/attendees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Attendees\\CreateAttendeeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Attendees\\CreateAttendeeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SR2OHJ2RaTCMEcOq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hFV5c8owtECGun64' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/attendees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Attendees\\GetAttendeesAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Attendees\\GetAttendeesAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hFV5c8owtECGun64',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XfQ1bJvfnU6anXvB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/attendees/{attendee_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Attendees\\GetAttendeeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Attendees\\GetAttendeeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XfQ1bJvfnU6anXvB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I7AwcXe1THZe3K3l' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'events/{event_id}/attendees/{attendee_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Attendees\\EditAttendeeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Attendees\\EditAttendeeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::I7AwcXe1THZe3K3l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g1hWABnBYqkPDxjx' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'events/{event_id}/attendees/{attendee_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Attendees\\PartialEditAttendeeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Attendees\\PartialEditAttendeeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::g1hWABnBYqkPDxjx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c5MZjNK5phNJLfsV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/attendees/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Attendees\\ExportAttendeesAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Attendees\\ExportAttendeesAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::c5MZjNK5phNJLfsV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iGMOQBAexFh4iHGD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/attendees/{attendee_public_id}/resend-ticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Attendees\\ResendAttendeeTicketAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Attendees\\ResendAttendeeTicketAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iGMOQBAexFh4iHGD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KzuOjjoQCeQBzgVD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/attendees/{attendee_public_id}/check_in',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Attendees\\CheckInAttendeeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Attendees\\CheckInAttendeeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KzuOjjoQCeQBzgVD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7oHLacYNZK2h15mL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Orders\\GetOrdersAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Orders\\GetOrdersAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7oHLacYNZK2h15mL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qMinetgyyo8T4J04' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/orders/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Orders\\GetOrderAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Orders\\GetOrderAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qMinetgyyo8T4J04',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uq9HeySLNwnriDOb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/orders/{order_id}/message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Orders\\MessageOrderAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Orders\\MessageOrderAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uq9HeySLNwnriDOb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d3czJznNGofivDo7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/orders/{order_id}/refund',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Orders\\Payment\\RefundOrderAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Orders\\Payment\\RefundOrderAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::d3czJznNGofivDo7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::muB9n9Ch32NZrVGk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/orders/{order_id}/resend_confirmation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Orders\\ResendOrderConfirmationAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Orders\\ResendOrderConfirmationAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::muB9n9Ch32NZrVGk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rFVS9TwNSqiI5BWr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/orders/{order_id}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Orders\\CancelOrderAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Orders\\CancelOrderAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rFVS9TwNSqiI5BWr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E0kgLHgllhy750pI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/orders/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Orders\\ExportOrdersAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Orders\\ExportOrdersAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::E0kgLHgllhy750pI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::haSFnGsE67yPrNQQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Messages\\SendMessageAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Messages\\SendMessageAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::haSFnGsE67yPrNQQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fNHRobyhRhSOPe9J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Messages\\GetMessagesAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Messages\\GetMessagesAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fNHRobyhRhSOPe9J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bCt9pUTJJ18Iy4Tw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Questions\\CreateQuestionAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Questions\\CreateQuestionAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bCt9pUTJJ18Iy4Tw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hf4xa87L8ygdQ3yn' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'events/{event_id}/questions/{question_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Questions\\EditQuestionAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Questions\\EditQuestionAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hf4xa87L8ygdQ3yn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8fM3B7efC65EmJKH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/questions/{question_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Questions\\GetQuestionAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Questions\\GetQuestionAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8fM3B7efC65EmJKH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1b4cxr30YJiboHmU' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'events/{event_id}/questions/{question_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Questions\\DeleteQuestionAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Questions\\DeleteQuestionAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1b4cxr30YJiboHmU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::52r0p7UOluYimXyt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Questions\\GetQuestionsAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Questions\\GetQuestionsAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::52r0p7UOluYimXyt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hUK7QwOarixb0izJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/questions/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Orders\\ExportOrdersAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Orders\\ExportOrdersAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hUK7QwOarixb0izJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Oqqt3NUMLqYFl0zD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/questions/sort',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Questions\\SortQuestionsAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Questions\\SortQuestionsAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Oqqt3NUMLqYFl0zD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6AJhxq7jmq8z2cuL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Events\\Images\\CreateEventImageAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Events\\Images\\CreateEventImageAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6AJhxq7jmq8z2cuL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N6gvp6Ky2PdWUw4q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Events\\Images\\GetEventImagesAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Events\\Images\\GetEventImagesAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::N6gvp6Ky2PdWUw4q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HgotYdiMpIWePlxV' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'events/{event_id}/images/{image_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Events\\Images\\DeleteEventImageAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Events\\Images\\DeleteEventImageAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HgotYdiMpIWePlxV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w2VCReDTHhtljGvk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/promo-codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\PromoCodes\\CreatePromoCodeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\PromoCodes\\CreatePromoCodeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::w2VCReDTHhtljGvk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9PpOln6PS7Yc4ejy' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'events/{event_id}/promo-codes/{promo_code_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\PromoCodes\\UpdatePromoCodeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\PromoCodes\\UpdatePromoCodeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9PpOln6PS7Yc4ejy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1yFU7EAwL8Wt6UgJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/promo-codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\PromoCodes\\GetPromoCodesAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\PromoCodes\\GetPromoCodesAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1yFU7EAwL8Wt6UgJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZC9iR0aIvJL94oHF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/promo-codes/{promo_code_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\PromoCodes\\GetPromoCodeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\PromoCodes\\GetPromoCodeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZC9iR0aIvJL94oHF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yJ4qb4vmpuGSSqeS' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'events/{event_id}/promo-codes/{promo_code_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\PromoCodes\\DeletePromoCodeAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\PromoCodes\\DeletePromoCodeAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yJ4qb4vmpuGSSqeS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jX0TcQc4VVdzb7Ie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\EventSettings\\GetEventSettingsAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\EventSettings\\GetEventSettingsAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jX0TcQc4VVdzb7Ie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qmIlWMdwbZdTy5kQ' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'events/{event_id}/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\EventSettings\\EditEventSettingsAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\EventSettings\\EditEventSettingsAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qmIlWMdwbZdTy5kQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yHRX3ekp7rvixjmF' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'events/{event_id}/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\EventSettings\\PartialEditEventSettingsAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\EventSettings\\PartialEditEventSettingsAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yHRX3ekp7rvixjmF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::frUKb2UMCJWSADF6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/capacity-assignments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\CapacityAssignments\\CreateCapacityAssignmentAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\CapacityAssignments\\CreateCapacityAssignmentAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::frUKb2UMCJWSADF6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TLI8cwMRNeRUZj7G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/capacity-assignments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\CapacityAssignments\\GetCapacityAssignmentsAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\CapacityAssignments\\GetCapacityAssignmentsAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TLI8cwMRNeRUZj7G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U58L6QC3NoBB8EWc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/capacity-assignments/{capacity_assignment_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\CapacityAssignments\\GetCapacityAssignmentAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\CapacityAssignments\\GetCapacityAssignmentAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::U58L6QC3NoBB8EWc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gaqBlk40bKeQbGHN' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'events/{event_id}/capacity-assignments/{capacity_assignment_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\CapacityAssignments\\UpdateCapacityAssignmentAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\CapacityAssignments\\UpdateCapacityAssignmentAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gaqBlk40bKeQbGHN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2IwkHhz4XaMNVUSi' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'events/{event_id}/capacity-assignments/{capacity_assignment_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\CapacityAssignments\\DeleteCapacityAssignmentAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\CapacityAssignments\\DeleteCapacityAssignmentAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2IwkHhz4XaMNVUSi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HXFgt6Pg7uSc6JSo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'events/{event_id}/check-in-lists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\CheckInLists\\CreateCheckInListAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\CheckInLists\\CreateCheckInListAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HXFgt6Pg7uSc6JSo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nah9rsAtnxpsLMc9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/check-in-lists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\CheckInLists\\GetCheckInListsAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\CheckInLists\\GetCheckInListsAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Nah9rsAtnxpsLMc9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4pqJcUigGdT8sIZW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'events/{event_id}/check-in-lists/{check_in_list_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\CheckInLists\\GetCheckInListAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\CheckInLists\\GetCheckInListAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4pqJcUigGdT8sIZW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zw29wPjRDWj8IpAC' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'events/{event_id}/check-in-lists/{check_in_list_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\CheckInLists\\UpdateCheckInListAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\CheckInLists\\UpdateCheckInListAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zw29wPjRDWj8IpAC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JpEWlvYxQF84d8d4' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'events/{event_id}/check-in-lists/{check_in_list_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\CheckInLists\\DeleteCheckInListAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\CheckInLists\\DeleteCheckInListAction',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JpEWlvYxQF84d8d4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vQG4GgdRTWQ7xKyu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'public/buyer/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\Buyer\\RegisterBuyerAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\Buyer\\RegisterBuyerAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::vQG4GgdRTWQ7xKyu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OxJ7F1aEP6dXqkmc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'public/buyer/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\Buyer\\LoginBuyerAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\Buyer\\LoginBuyerAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::OxJ7F1aEP6dXqkmc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buyer.password.request' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'public/buyer/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\Buyer\\ForgotPasswordBuyerAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\Buyer\\ForgotPasswordBuyerAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'buyer.password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buyer.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'public/buyer/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\Buyer\\ResetPasswordBuyerAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\Buyer\\ResetPasswordBuyerAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'buyer.password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/buyer/reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:93:"function() {
            return \\response()->json([\'message\' => \'Token is valid\']);
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006840000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buyer.verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/buyer/email/verify/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'signed',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\Buyer\\VerifyBuyerEmailAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\Buyer\\VerifyBuyerEmailAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'buyer.verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buyer.verification.resend' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'public/buyer/email/resend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:buyer',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\Buyer\\ResendBuyerVerificationAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\Buyer\\ResendBuyerVerificationAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'buyer.verification.resend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DW9MyGXKT9QsCC8B' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'public/email-organizer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Public\\StoreEmailOrganizerAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Public\\StoreEmailOrganizerAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::DW9MyGXKT9QsCC8B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DLOEg48jYhFeWHmG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/events/{event_id}/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Orders\\GetEventTransactionsAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Orders\\GetEventTransactionsAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::DLOEg48jYhFeWHmG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::osSqYia8qx45wYae' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Orders\\GetAllTransactionsAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Orders\\GetAllTransactionsAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::osSqYia8qx45wYae',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AvCDq3U4HiYdh8ws' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/buyer/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:buyer',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\Buyer\\GetBuyerOrdersAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\Buyer\\GetBuyerOrdersAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::AvCDq3U4HiYdh8ws',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CsCxUIpvoR8PWooK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/buyer/orders/{order_short_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:buyer',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Auth\\Buyer\\GetBuyerOrderAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Auth\\Buyer\\GetBuyerOrderAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::CsCxUIpvoR8PWooK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XnQmCbcfDdTwadNy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/events/{event_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Events\\GetEventPublicAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Events\\GetEventPublicAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::XnQmCbcfDdTwadNy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zym3M3PJoSnPR4Fs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/events/{event_id}/tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Events\\GetEventPublicAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Events\\GetEventPublicAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::zym3M3PJoSnPR4Fs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qpm1nmwXBdcXepW7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'public/events/{event_id}/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Orders\\CreateOrderActionPublic@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Orders\\CreateOrderActionPublic',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::qpm1nmwXBdcXepW7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Cq71ny2vmJ6nW8Ba' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'public/events/{event_id}/order/{order_short_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Orders\\CompleteOrderActionPublic@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Orders\\CompleteOrderActionPublic',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::Cq71ny2vmJ6nW8Ba',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PecTB3QQAG56x9VB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/events/{event_id}/order/{order_short_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Orders\\GetOrderActionPublic@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Orders\\GetOrderActionPublic',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::PecTB3QQAG56x9VB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m6vHSOK6P85l1qve' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/events/{event_id}/attendees/{attendee_short_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Attendees\\GetAttendeeActionPublic@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Attendees\\GetAttendeeActionPublic',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::m6vHSOK6P85l1qve',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::prtaEH6v4colsg95' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/events/{event_id}/promo-codes/{promo_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\PromoCodes\\GetPromoCodePublic@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\PromoCodes\\GetPromoCodePublic',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::prtaEH6v4colsg95',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kKCclKXmJ3IrMnAY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'public/events/{event_id}/order/{order_short_id}/stripe/payment_intent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Orders\\Payment\\Stripe\\CreatePaymentIntentActionPublic@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Orders\\Payment\\Stripe\\CreatePaymentIntentActionPublic',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::kKCclKXmJ3IrMnAY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rhnSoLT1J4avzCyg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/events/{event_id}/order/{order_short_id}/stripe/payment_intent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Orders\\Payment\\Stripe\\GetPaymentIntentActionPublic@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Orders\\Payment\\Stripe\\GetPaymentIntentActionPublic',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::rhnSoLT1J4avzCyg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QSvTMGPbGfPgJUM0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/events/{event_id}/questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Questions\\GetQuestionsPublicAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Questions\\GetQuestionsPublicAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::QSvTMGPbGfPgJUM0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JnolqPlrOFpHQlzC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'public/webhooks/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Common\\Webhooks\\StripeIncomingWebhookAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\Common\\Webhooks\\StripeIncomingWebhookAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::JnolqPlrOFpHQlzC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KvBck11mboWn0hDn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'public/webhooks/midtrans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\Orders\\HandleWebHookMidtrans@handleNotification',
        'controller' => 'HiEvents\\Http\\Actions\\Orders\\HandleWebHookMidtrans@handleNotification',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::KvBck11mboWn0hDn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SKJdVZZnBArbCt36' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/check-in-lists/{check_in_list_short_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\CheckInLists\\Public\\GetCheckInListPublicAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\CheckInLists\\Public\\GetCheckInListPublicAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::SKJdVZZnBArbCt36',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wMZpWGUmc65hFSOS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/check-in-lists/{check_in_list_short_id}/attendees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\CheckInLists\\Public\\GetCheckInListAttendeesPublicAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\CheckInLists\\Public\\GetCheckInListAttendeesPublicAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::wMZpWGUmc65hFSOS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HmjVUkXtxkCwTtCn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'public/check-in-lists/{check_in_list_short_id}/check-ins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\CheckInLists\\Public\\CreateAttendeeCheckInPublicAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\CheckInLists\\Public\\CreateAttendeeCheckInPublicAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::HmjVUkXtxkCwTtCn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gwe9tByJ4ny3bdbf' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'public/check-in-lists/{check_in_list_short_id}/check-ins/{check_in_short_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'HiEvents\\Http\\Actions\\CheckInLists\\Public\\DeleteAttendeeCheckInPublicAction@__invoke',
        'controller' => 'HiEvents\\Http\\Actions\\CheckInLists\\Public\\DeleteAttendeeCheckInPublicAction',
        'namespace' => NULL,
        'prefix' => '/public',
        'where' => 
        array (
        ),
        'as' => 'generated::gwe9tByJ4ny3bdbf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lLyEHT3AOYosY5cx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mail-test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1029:"static function () {
    $orderItem = (new \\HiEvents\\DomainObjects\\OrderItemDomainObject())
        ->setId(1)
        ->setQuantity(1)
        ->setPrice(100)
        ->setItemName(\'Test Item\');

    $orderItem2 = (new \\HiEvents\\DomainObjects\\OrderItemDomainObject())
        ->setId(1)
        ->setQuantity(1)
        ->setPrice(100)
        ->setItemName(\'Test Item\');

    $order = (new \\HiEvents\\DomainObjects\\OrderDomainObject())
        ->setId(2)
        ->setPublicId(\'123\')
        ->setShortId(\'123\')
        ->setOrderItems(\\collect([$orderItem, $orderItem2]));

    $organizer = (new \\HiEvents\\DomainObjects\\OrganizerDomainObject())
        ->setId(1)
        ->setName(\'Test Organizer\')
        ->setEmail(\'s@d.com\');

    $event = (new \\HiEvents\\DomainObjects\\EventDomainObject())
        ->setId(1)
        ->setTitle(\'Test Event\')
        ->setStartDate(\\now())
        ->setTimeZone(\'UTC\')
        ->setOrganizer($organizer);

    return new \\HiEvents\\Mail\\Organizer\\OrderSummaryForOrganizer($order, $event);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006280000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lLyEHT3AOYosY5cx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CmSflauFub54lqHr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000069e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CmSflauFub54lqHr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
