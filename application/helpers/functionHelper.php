<?php
function checkingAlreadyLogin()
{
    $coreCI = &get_instance();
    $userSession = $coreCI->session->userdata('userid');
    echo $userSession;
    if ($userSession) {
        redirect(base_url('dashboard'));
    }
}

function checkingNotLogin()
{
    $coreCI = &get_instance();
    $userSession = $coreCI->session->userdata('userid');
    echo $userSession;
    if (!$userSession) {
        redirect(base_url('login'));
    }
}
