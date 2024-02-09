<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        </style>
        <?php
                // toastr()->addSuccess('Your account has been restored.');
                toastr()
                ->persistent()
                ->closeButton()
                ->addSuccess('Your password has been changed.');
                
                toastr()
                ->closeButton(true)
                ->addWarning('Your password may be at risk.');

                toastr()
                ->closeButton(true)
                ->closeHtml('😊')
                ->addSuccess('Your account has been suspended.');
                
                toastr()
                ->closeOnHover(true)
                ->closeDuration(10)
                ->addInfo('Your password has been reset and a new one has been sent to your email.');

                toastr()
                ->escapeHtml(true)
                ->addError('<strong>We’re sorry</strong>, but an error occurred.');

                
                toastr()
                ->escapeHtml(false)
                ->addError('<strong>We’re sorry</strong>, but an error occurred.');





                //فالس باشه میاد پایین همه قرار میگیره
                toastr()
                    ->newestOnTop(false)
                    ->addError('There was a problem re-verifying your account.');



                    //کار نکرد
                toastr()
                ->positionClass('toast-top-center')
                ->addWarning('Your account may not have been restored.');

              //همون خط پایینی      
              toastr()
              ->progressBar(false)
              ->addError('There was an issue restoring your account.');

              toastr()
    ->rtl(true)
    ->addInfo('خطا داریم اینجا .');


    toastr()
    ->timeOut(10000) // 1 second
    ->addError('There was an issue unlocking your account.');


    toastr()
    ->target('body')
    ->addSuccess('Your order has been shipped.');
    
toastr()
->tapToDismiss(true)
->addInfo('Your information has been saved and a confirmation email has been sent.');

                //اگه پیام تکراری باشه یه بار فقط نمایش میده
                toastr()
                    ->preventDuplicates(true)
                    ->addSuccess('Your order has been shipped.');
                toastr()
                ->preventDuplicates(true)
                ->addSuccess('Your order has been shipped.');
                toastr()
                    ->preventDuplicates(true)
                    ->addSuccess('Your order has been shipped.');



        ?>
        @livewireStyles
    </head>
    <body class="antialiased">
    <livewire:counter/> 

    <livewire:basic.basic :course="$courses"/> 


        @livewireScripts
    </body>
</html>
