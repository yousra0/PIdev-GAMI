<?php
 if (!class_exists('CaptchaConfiguration')) { return; }

 // You could have more than one object like ExampleCaptcha. For example, one for the login page, another for the register page, etc.
 return [
   'ExampleCaptcha' => [
     'UserInputID' => 'captchaCode',
     'CodeLength' => CaptchaRandomization::GetRandomCodeLength(5, 6),
     'ImageWidth' => 250,
     'ImageHeight' => 50,
   ],
   // Captcha configuration for login page
  'LoginCaptcha' => [
    'UserInputID' => 'captchaCode',
    'CodeLength' => CaptchaRandomization::GetRandomCodeLength(4, 6),
    'ImageStyle' => [
      ImageStyle::Radar,
      ImageStyle::Collage,
      ImageStyle::Fingerprints,
    ],
  ],
 ];