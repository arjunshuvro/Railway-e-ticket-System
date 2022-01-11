<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="f9m8KMzneccRcnepuPopfg5S3bomRummUOP0U3tm">
<title>BANGLADESH RAILWAY E-TICKETING SERVICE</title>

<!-- Styles -->
<link href="https://www.esheba.cnsbd.com/css/app.css" rel="stylesheet">

<script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-29871770-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<style type="text/css">
    .notifications {
        display: block;
        position: fixed;
        z-index: 5000
    }

    .notification-wrapper {
        display: block;
        overflow: hidden;
        width: 100%;
        margin: 0;
        padding: 0
    }

    .notification-title {
        font-weight: 600
    }

    .vue-notification-template {
        background: #fff
    }

    .vue-notification,
    .vue-notification-template {
        display: block;
        box-sizing: border-box;
        text-align: left
    }

    .vue-notification {
        font-size: 12px;
        padding: 10px;
        margin: 0 5px 5px;
        color: #fff;
        background: #44a4fc;
        border-left: 5px solid #187fe7
    }

    .vue-notification.warn {
        background: #ffb648;
        border-left-color: #f48a06
    }

    .vue-notification.error {
        background: #e54d42;
        border-left-color: #b82e24
    }

    .vue-notification.success {
        background: #68cd86;
        border-left-color: #42a85f
    }

    .vn-fade-enter-active,
    .vn-fade-leave-active,
    .vn-fade-move {
        transition: all .5s
    }

    .vn-fade-enter,
    .vn-fade-leave-to {
        opacity: 0
    }
</style>
<style type="text/css">
    .router-link-exact-active {
        color: #000 !important;
    }

    .logo-text {
        font-size: 26px;
    }

    @media only screen and (min-device-width : 420px) and (max-device-width : 580px) {
        .logo-text {
            font-size: 17px !important;
        }
    }
</style>
<style type="text/css">
    .dashboard {
        background-color: white;
    }

    .dashboard-title {
        color: white;
    }

    .sidebar {
        margin: 0;
        padding: 0;
        background-color: white;
        height: 100%;
        overflow: auto;
        border-right: 1px solid #102F63;
    }

    .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
        border-bottom: 2px solid rgba(16, 47, 99, 0.06);
    }

    .sidebar a.router-link-active {
        background-color: #102F63 !important;
        color: white !important;
    }

    .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
    }

    div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
    }

    @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }

        .sidebar a {
            float: left;
        }

        div.content {
            margin-left: 0;
        }
    }

    @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
    }
</style>
<style type="text/css">
    .font-size-14px[data-v-a98811ec] {
        font-size: 14px;
    }
</style>
<style type="text/css">
    .datepicker[data-v-139db56a] {
        border: none;
        width: 100%;
    }
</style>
<style type="text/css">
    .v-select {
        position: relative;
        font-family: inherit;
    }

    .v-select,
    .v-select * {
        box-sizing: border-box;
    }

    /* KeyFrames */
    @-webkit-keyframes vSelectSpinner {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes vSelectSpinner {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Dropdown Default Transition */
    .vs__fade-enter-active,
    .vs__fade-leave-active {
        transition: opacity 0.15s cubic-bezier(1, 0.5, 0.8, 1);
    }

    .vs__fade-enter,
    .vs__fade-leave-to {
        opacity: 0;
    }

    /** Component States */
    /*
 * Disabled
 *
 * When the component is disabled, all interaction
 * should be prevented. Here we modify the bg color,
 * and change the cursor displayed on the interactive
 * components.
 */
    .vs--disabled .vs__dropdown-toggle,
    .vs--disabled .vs__clear,
    .vs--disabled .vs__search,
    .vs--disabled .vs__selected,
    .vs--disabled .vs__open-indicator {
        cursor: not-allowed;
        background-color: #f8f8f8;
    }

    /*
 *  RTL - Right to Left Support
 *
 *  Because we're using a flexbox layout, the `dir="rtl"`
 *  HTML attribute does most of the work for us by
 *  rearranging the child elements visually.
 */
    .v-select[dir=rtl] .vs__actions {
        padding: 0 3px 0 6px;
    }

    .v-select[dir=rtl] .vs__clear {
        margin-left: 6px;
        margin-right: 0;
    }

    .v-select[dir=rtl] .vs__deselect {
        margin-left: 0;
        margin-right: 2px;
    }

    .v-select[dir=rtl] .vs__dropdown-menu {
        text-align: right;
    }

    /**
    Dropdown Toggle

    The dropdown toggle is the primary wrapper of the component. It
    has two direct descendants: .vs__selected-options, and .vs__actions.

    .vs__selected-options holds the .vs__selected's as well as the
    main search input.

    .vs__actions holds the clear button and dropdown toggle.
 */
    .vs__dropdown-toggle {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        display: flex;
        padding: 0 0 4px 0;
        background: none;
        border: 1px solid rgba(60, 60, 60, 0.26);
        border-radius: 4px;
        white-space: normal;
    }

    .vs__selected-options {
        display: flex;
        flex-basis: 100%;
        flex-grow: 1;
        flex-wrap: wrap;
        padding: 0 2px;
        position: relative;
    }

    .vs__actions {
        display: flex;
        align-items: center;
        padding: 4px 6px 0 3px;
    }

    /* Dropdown Toggle States */
    .vs--searchable .vs__dropdown-toggle {
        cursor: text;
    }

    .vs--unsearchable .vs__dropdown-toggle {
        cursor: pointer;
    }

    .vs--open .vs__dropdown-toggle {
        border-bottom-color: transparent;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    .vs__open-indicator {
        fill: rgba(60, 60, 60, 0.5);
        transform: scale(1);
        transition: transform 150ms cubic-bezier(1, -0.115, 0.975, 0.855);
        transition-timing-function: cubic-bezier(1, -0.115, 0.975, 0.855);
    }

    .vs--open .vs__open-indicator {
        transform: rotate(180deg) scale(1);
    }

    .vs--loading .vs__open-indicator {
        opacity: 0;
    }

    /* Clear Button */
    .vs__clear {
        fill: rgba(60, 60, 60, 0.5);
        padding: 0;
        border: 0;
        background-color: transparent;
        cursor: pointer;
        margin-right: 8px;
    }

    /* Dropdown Menu */
    .vs__dropdown-menu {
        display: block;
        position: absolute;
        top: calc(100% - 1px);
        left: 0;
        z-index: 1000;
        padding: 5px 0;
        margin: 0;
        width: 100%;
        max-height: 350px;
        min-width: 160px;
        overflow-y: auto;
        box-shadow: 0px 3px 6px 0px rgba(0, 0, 0, 0.15);
        border: 1px solid rgba(60, 60, 60, 0.26);
        border-top-style: none;
        border-radius: 0 0 4px 4px;
        text-align: left;
        list-style: none;
        background: #fff;
    }

    .vs__no-options {
        text-align: center;
    }

    /* List Items */
    .vs__dropdown-option {
        line-height: 1.42857143;
        /* Normalize line height */
        display: block;
        padding: 3px 20px;
        clear: both;
        color: #333;
        /* Overrides most CSS frameworks */
        white-space: nowrap;
    }

    .vs__dropdown-option:hover {
        cursor: pointer;
    }

    .vs__dropdown-option--highlight {
        background: #5897fb;
        color: #fff;
    }

    /* Selected Tags */
    .vs__selected {
        display: flex;
        align-items: center;
        background-color: #f0f0f0;
        border: 1px solid rgba(60, 60, 60, 0.26);
        border-radius: 4px;
        color: #333;
        line-height: 1.4;
        margin: 4px 2px 0px 2px;
        padding: 0 0.25em;
    }

    .vs__deselect {
        display: inline-flex;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin-left: 4px;
        padding: 0;
        border: 0;
        cursor: pointer;
        background: none;
        fill: rgba(60, 60, 60, 0.5);
        text-shadow: 0 1px 0 #fff;
    }

    /* States */
    .vs--single .vs__selected {
        background-color: transparent;
        border-color: transparent;
    }

    .vs--single.vs--open .vs__selected {
        position: absolute;
        opacity: 0.4;
    }

    .vs--single.vs--searching .vs__selected {
        display: none;
    }

    /* Search Input */
    .vs__search::-webkit-search-decoration,
    .vs__search::-webkit-search-cancel-button,
    .vs__search::-webkit-search-results-button,
    .vs__search::-webkit-search-results-decoration,
    .vs__search::-ms-clear {
        display: none;
    }

    .vs__search,
    .vs__search:focus {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        line-height: 1.4;
        font-size: 1em;
        border: 1px solid transparent;
        border-left: none;
        outline: none;
        margin: 4px 0 0 0;
        padding: 0 7px;
        background: none;
        box-shadow: none;
        width: 0;
        max-width: 100%;
        flex-grow: 1;
    }

    .vs__search::-webkit-input-placeholder {
        color: inherit;
    }

    .vs__search::-moz-placeholder {
        color: inherit;
    }

    .vs__search:-ms-input-placeholder {
        color: inherit;
    }

    .vs__search::-ms-input-placeholder {
        color: inherit;
    }

    .vs__search::placeholder {
        color: inherit;
    }

    /**
    States
 */
    .vs--unsearchable .vs__search {
        opacity: 1;
    }

    .vs--unsearchable .vs__search:hover {
        cursor: pointer;
    }

    .vs--single.vs--searching:not(.vs--open):not(.vs--loading) .vs__search {
        opacity: 0.2;
    }

    /* Loading Spinner */
    .vs__spinner {
        align-self: center;
        opacity: 0;
        font-size: 5px;
        text-indent: -9999em;
        overflow: hidden;
        border-top: 0.9em solid rgba(100, 100, 100, 0.1);
        border-right: 0.9em solid rgba(100, 100, 100, 0.1);
        border-bottom: 0.9em solid rgba(100, 100, 100, 0.1);
        border-left: 0.9em solid rgba(60, 60, 60, 0.45);
        transform: translateZ(0);
        -webkit-animation: vSelectSpinner 1.1s infinite linear;
        animation: vSelectSpinner 1.1s infinite linear;
        transition: opacity 0.1s;
    }

    .vs__spinner,
    .vs__spinner:after {
        border-radius: 50%;
        width: 5em;
        height: 5em;
    }

    /* Loading Spinner States */
    .vs--loading .vs__spinner {
        opacity: 1;
    }
</style>
<style type="text/css">
    #seat-plan-search-form-inline,
    #seat-plan-search-form-ipad {
        color: #4a4a4a;
        /* For IE10 */
    }

    #seat-plan-search-form-inline .vs__selected-options input,
    #seat-plan-search-form-ipad .vs__selected-options input {
        color: white;
    }

    #seat-plan-search-form-inline .error,
    #seat-plan-search-form-ipad .error {
        background: transparent;
    }

    #seat-plan-search-form-inline select.form-control-2,
    #seat-plan-search-form-ipad select.form-control-2 {
        /* for Firefox */
        -moz-appearance: none;
        /* for Chrome */
        -webkit-appearance: none;
    }

    #seat-plan-search-form-inline select.form-control-2::-ms-expand.form-control-2,
    #seat-plan-search-form-ipad select.form-control-2::-ms-expand.form-control-2 {
        display: none;
    }

    #seat-plan-search-form-inline .form-control-2 .vs__open-indicator,
    #seat-plan-search-form-ipad .form-control-2 .vs__open-indicator {
        display: none;
    }

    #seat-plan-search-form-inline .form-control-2,
    #seat-plan-search-form-ipad .form-control-2 {
        display: block;
        width: 100%;
        height: calc(1.2em + 0.75rem + 2px);
        font-weight: bold;
        line-height: 1.2;
        /*font-size: 1.8rem;*/
        background-clip: padding-box;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    #seat-plan-search-form-inline .form-control-2 .vs__dropdown-menu,
    #seat-plan-search-form-inline .form-control-2 .vdp-datepicker__calendar,
    #seat-plan-search-form-inline select.form-control-2 option,
    #seat-plan-search-form-ipad .form-control-2 .vs__dropdown-menu,
    #seat-plan-search-form-ipad .form-control-2 .vdp-datepicker__calendar,
    #seat-plan-search-form-ipad select.form-control-2 option {
        /*font-size: 1rem;*/
        font-weight: normal;
    }

    #seat-plan-search-form-inline .form-control-2 .vs__dropdown-toggle,
    #seat-plan-search-form-ipad .form-control-2 .vs__dropdown-toggle {
        border: none;
        border-bottom: 1px solid #CCCCCC;
        border-radius: 0;
    }

    #seat-plan-search-form-inline .form-control-2 .vs__selected,
    #seat-plan-search-form-ipad .form-control-2 .vs__selected {
        color: white;
        padding-bottom: 3px;
    }

    #seat-plan-search-form-inline .form-control-2 .vs__open-indicator,
    #seat-plan-search-form-ipad .form-control-2 .vs__open-indicator {
        fill: white;
    }

    #seat-plan-search-form-inline .form-control-2 input.journeyDate[readonly],
    #seat-plan-search-form-ipad .form-control-2 input.journeyDate[readonly] {
        width: 100%;
        background: transparent;
        border: none;
        border-bottom: 1px solid #CCCCCC;
        padding: 7px 0 9px 0;
        color: white;
        font-weight: bold;
    }

    #seat-plan-search-form-inline select.form-control-2,
    #seat-plan-search-form-inline select:active.form-control-2,
    #seat-plan-search-form-inline select:hover.form-control-2,
    #seat-plan-search-form-inline select:focus.form-control-2,
    #seat-plan-search-form-inline select:visited.form-control-2,
    #seat-plan-search-form-ipad select.form-control-2,
    #seat-plan-search-form-ipad select:active.form-control-2,
    #seat-plan-search-form-ipad select:hover.form-control-2,
    #seat-plan-search-form-ipad select:focus.form-control-2,
    #seat-plan-search-form-ipad select:visited.form-control-2 {
        width: 100%;
        background: transparent;
        border: none;
        border-bottom: 1px solid #CCCCCC;
        padding: 0 0 7px 4px;
        color: white;
    }

    #seat-plan-search-form-inline select.form-control-2 option,
    #seat-plan-search-form-ipad select.form-control-2 option {
        color: black;
    }
</style>
<style type="text/css">
    .seat-grid {
        border: 1px solid white;
        width: 16.6666%;
        font-size: inherit;
        padding: 0;
    }

    button.seat-grid {
        position: relative;
    }

    button.seat-grid .fa-minus-circle {
        position: absolute;
        color: #BF2718;
        top: -6px;
        right: 0px;
    }
</style>
<style type="text/css">
    #overlay {
        z-index: 999 !important;
    }

    .coach-body {
        padding: 1%;
        border-left: 1px solid gray;
        border-right: 1px solid gray;
    }

    .coach-head-foot {
        margin: 0;
        font-size: smaller;
    }

    .select-option {
        padding: 0px 0px 10px 0px;
    }

    .select-option .btn.active i {
        color: #008000;
    }

    i.refresh {
        cursor: pointer
    }

    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: portrait) {
        .modal-dialog {
            max-width: 694px;
        }
    }
</style>
<style type="text/css">
    .tracking-detail[data-v-24500b1e] {
        padding: 3rem 0;
    }

    #tracking[data-v-24500b1e] {
        margin-bottom: 1rem;
    }

    [class*=tracking-status-] p[data-v-24500b1e] {
        margin: 0;
        font-size: 1.1rem;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
    }

    [class*=tracking-status-][data-v-24500b1e] {
        padding: 1.6rem 0;
    }

    .tracking-status-intransit[data-v-24500b1e] {
        background-color: #65aee0;
    }

    .tracking-status-outfordelivery[data-v-24500b1e] {
        background-color: #f5a551;
    }

    .tracking-status-deliveryoffice[data-v-24500b1e] {
        background-color: #f7dc6f;
    }

    .tracking-status-delivered[data-v-24500b1e] {
        background-color: #4cbb87;
    }

    .tracking-status-attemptfail[data-v-24500b1e] {
        background-color: #b789c7;
    }

    .tracking-status-error[data-v-24500b1e],
    .tracking-status-exception[data-v-24500b1e] {
        background-color: #d26759;
    }

    .tracking-status-expired[data-v-24500b1e] {
        background-color: #616e7d;
    }

    .tracking-status-pending[data-v-24500b1e] {
        background-color: #ccc;
    }

    .tracking-status-inforeceived[data-v-24500b1e] {
        background-color: #214977;
    }

    .tracking-list[data-v-24500b1e] {
        /*border:1px solid #e5e5e5*/
    }

    .tracking-item[data-v-24500b1e] {
        border-left: 2px dotted #009688;
        position: relative;
        padding: 2rem 1.5rem 0.5rem 2.5rem;
        font-size: 0.9rem;
        margin-left: 3rem;
        /*min-height:5rem*/
    }

    .tracking-item[data-v-24500b1e]:last-child {
        padding-bottom: 4rem;
    }

    .tracking-item .tracking-date[data-v-24500b1e] {
        margin-bottom: 0.5rem;
    }

    .tracking-item .tracking-date span[data-v-24500b1e] {
        color: #000;
        font-size: 85%;
        padding-left: 0.4rem;
    }

    .tracking-item .tracking-content[data-v-24500b1e] {
        padding: 0.5rem 0.8rem;
        background-color: #f4f4f4;
        border-radius: 0.5rem;
        color: #000;
    }

    .tracking-item .tracking-content span[data-v-24500b1e] {
        display: block;
        color: #000;
        font-size: 85%;
    }

    .tracking-item .tracking-icon[data-v-24500b1e] {
        /*line-height:2.6rem;*/
        line-height: 0;
        position: absolute;
        left: -1.3rem;
        width: 2.6rem;
        height: 1.5rem;
        text-align: center;
        border-radius: 50%;
        font-size: 1.1rem;
        background-color: #fff;
        color: #fff;
    }

    .tracking-item .tracking-icon.status-sponsored[data-v-24500b1e] {
        background-color: #f68;
    }

    .tracking-item .tracking-icon.status-delivered[data-v-24500b1e] {
        background-color: #4cbb87;
    }

    .tracking-item .tracking-icon.status-outfordelivery[data-v-24500b1e] {
        background-color: #f5a551;
    }

    .tracking-item .tracking-icon.status-deliveryoffice[data-v-24500b1e] {
        background-color: #f7dc6f;
    }

    .tracking-item .tracking-icon.status-attemptfail[data-v-24500b1e] {
        background-color: #b789c7;
    }

    .tracking-item .tracking-icon.status-exception[data-v-24500b1e] {
        background-color: #d26759;
    }

    .tracking-item .tracking-icon.status-inforeceived[data-v-24500b1e] {
        background-color: #214977;
    }

    .tracking-item .tracking-icon.status-intransit[data-v-24500b1e] {
        color: orangered;
        /*border:1px solid #e5e5e5;*/
    }

    .tracking-item.last[data-v-24500b1e] {
        min-height: auto;
        padding-bottom: 0;
    }

    .tracking-item.began[data-v-24500b1e] {
        min-height: auto;
        padding-top: 0;
    }

    @media (min-width: 992px) {
        .tracking-item[data-v-24500b1e] {
            margin-left: 5rem;
        }

        .tracking-item .tracking-date[data-v-24500b1e] {
            position: absolute;
            left: -10rem;
            width: 7.5rem;
            text-align: right;
        }

        .tracking-item .tracking-date span[data-v-24500b1e] {
            display: block;
        }

        .tracking-item .tracking-content[data-v-24500b1e] {
            padding: 0;
            background-color: transparent;
            color: #000;
        }
    }
</style>
<style type="text/css">
    .modal-no-scroll[data-v-4a3d666a] {
        overflow: hidden !important;
    }
</style>
<style type="text/css">
    .timeline[data-v-567285b7] {
        display: flex;
        padding-left: 5px;
        overflow-x: hidden;
        overflow-y: hidden;
    }

    .timeline-block[data-v-567285b7] {
        padding-left: 1px;
    }

    .timeline-station[data-v-567285b7],
    .timeline-time[data-v-567285b7] {
        width: 100%;
        margin-bottom: 10%;
        display: flex;
        flex-direction: column;
        align-items: center;
        color: white;
        font-size: 8px;
        text-transform: uppercase;
    }

    .timeline-station[data-v-567285b7] {
        padding: 0 0 0 50%;
    }

    .timeline-time[data-v-567285b7] {
        padding: 7% 0 0 50%;
        text-transform: lowercase;
    }

    .timeline-bar[data-v-567285b7] {
        display: flex;
        justify-content: center;
        border-top: 1px dashed white;
        position: relative;
        font-weight: 100;
        color: white;
        padding: 0 0 0 50%;
        width: 150px;
    }

    .timeline-bar[data-v-567285b7]:before {
        content: '';
        width: 8px;
        height: 8px;
        background-color: #e8eeff;
        border-radius: 50%;
        border: 2px solid white;
        position: absolute;
        top: -5px;
    }

    .timeline-bar-last[data-v-567285b7] {
        display: flex;
        justify-content: right;
        border-top: 1px dashed white;
        position: relative;
        font-weight: 100;
        color: white;
        padding: 0 0 0 100%;
        width: 150px;
    }

    .timeline-bar-last[data-v-567285b7]:before {
        content: '';
        width: 8px;
        height: 8px;
        background-color: transparent;
        position: absolute;
        top: -6px;

        border-top: 5px solid transparent;
        border-left: 8px solid white;
        border-bottom: 5px solid transparent;
    }

    #timeline-scroll[data-v-567285b7] {
        text-align: center;
    }
</style>
<style type="text/css">
    .bg-custom-yellow {
        background-image: linear-gradient(#eeeeee, #fff);
        border-radius: 5px;
    }
</style>
<style type="text/css">
    .slide-leave-active,
    .slide-enter-active {
        transition: 1s;
    }

    .slide-enter {
        transform: translate(250%, -50%);
    }

    .slide-leave-to {
        transform: translate(-260%, -50%);
    }

    .modal-dialog {
        pointer-events: auto;
    }

    #overlay {
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(16, 47, 99, 0.8);
        display: table;
        transition: opacity .3s ease;
    }
</style>
<style type="text/css">
    .purchase-font-size[data-v-e8fd6f88] {
        font-size: .86rem;
    }

    .modal-body.scroll-y[data-v-e8fd6f88] {
        overflow-y: scroll;
    }
</style>
<style type="text/css">
    .vld-overlay {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        align-items: center;
        display: none;
        justify-content: center;
        overflow: hidden;
        z-index: 1
    }

    .vld-overlay.is-active {
        display: flex
    }

    .vld-overlay.is-full-page {
        z-index: 999;
        position: fixed
    }

    .vld-overlay .vld-background {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        background: #fff;
        opacity: 0.5
    }

    .vld-overlay .vld-icon,
    .vld-parent {
        position: relative
    }
</style>
<style type="text/css">
    .cus-i-col {
        color: #102f63;
    }

    .cus-font-col-5 {
        font-size: 13px;
        color: #716e6e;
    }

    .cus-t-bor {
        border-top: 1px solid #cccccc;
    }
</style>
<style type="text/css">
    .card-block {
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
    }

    .card-block:hover {
        cursor: pointer;
        -webkit-filter: grayscale(0);
        filter: grayscale(0);
    }

    .card-block img {
        width: 50%;
    }
</style>
<style type="text/css">
    #payment .card-header {
        display: block;
    }
</style>
<style type="text/css">
    #bkash_payment {
        min-height: 200px;
    }
</style>
<style type="text/css">
    table,
    td {
        border: 1px rgba(16, 47, 99, 0.09) solid;
    }
</style>
<style type="text/css">
    .rtl {
        direction: rtl;
    }

    .vdp-datepicker {
        position: relative;
        text-align: left;
    }

    .vdp-datepicker * {
        box-sizing: border-box;
    }

    .vdp-datepicker__calendar {
        position: absolute;
        z-index: 100;
        background: #fff;
        width: 300px;
        border: 1px solid #ccc;
    }

    .vdp-datepicker__calendar header {
        display: block;
        line-height: 40px;
    }

    .vdp-datepicker__calendar header span {
        display: inline-block;
        text-align: center;
        width: 71.42857142857143%;
        float: left;
    }

    .vdp-datepicker__calendar header .prev,
    .vdp-datepicker__calendar header .next {
        width: 14.285714285714286%;
        float: left;
        text-indent: -10000px;
        position: relative;
    }

    .vdp-datepicker__calendar header .prev:after,
    .vdp-datepicker__calendar header .next:after {
        content: '';
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translateX(-50%) translateY(-50%);
        border: 6px solid transparent;
    }

    .vdp-datepicker__calendar header .prev:after {
        border-right: 10px solid #000;
        margin-left: -5px;
    }

    .vdp-datepicker__calendar header .prev.disabled:after {
        border-right: 10px solid #ddd;
    }

    .vdp-datepicker__calendar header .next:after {
        border-left: 10px solid #000;
        margin-left: 5px;
    }

    .vdp-datepicker__calendar header .next.disabled:after {
        border-left: 10px solid #ddd;
    }

    .vdp-datepicker__calendar header .prev:not(.disabled),
    .vdp-datepicker__calendar header .next:not(.disabled),
    .vdp-datepicker__calendar header .up:not(.disabled) {
        cursor: pointer;
    }

    .vdp-datepicker__calendar header .prev:not(.disabled):hover,
    .vdp-datepicker__calendar header .next:not(.disabled):hover,
    .vdp-datepicker__calendar header .up:not(.disabled):hover {
        background: #eee;
    }

    .vdp-datepicker__calendar .disabled {
        color: #ddd;
        cursor: default;
    }

    .vdp-datepicker__calendar .flex-rtl {
        display: flex;
        width: inherit;
        flex-wrap: wrap;
    }

    .vdp-datepicker__calendar .cell {
        display: inline-block;
        padding: 0 5px;
        width: 14.285714285714286%;
        height: 40px;
        line-height: 40px;
        text-align: center;
        vertical-align: middle;
        border: 1px solid transparent;
    }

    .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).day,
    .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).month,
    .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).year {
        cursor: pointer;
    }

    .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).day:hover,
    .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).month:hover,
    .vdp-datepicker__calendar .cell:not(.blank):not(.disabled).year:hover {
        border: 1px solid #4bd;
    }

    .vdp-datepicker__calendar .cell.selected {
        background: #4bd;
    }

    .vdp-datepicker__calendar .cell.selected:hover {
        background: #4bd;
    }

    .vdp-datepicker__calendar .cell.selected.highlighted {
        background: #4bd;
    }

    .vdp-datepicker__calendar .cell.highlighted {
        background: #cae5ed;
    }

    .vdp-datepicker__calendar .cell.highlighted.disabled {
        color: #a3a3a3;
    }

    .vdp-datepicker__calendar .cell.grey {
        color: #888;
    }

    .vdp-datepicker__calendar .cell.grey:hover {
        background: inherit;
    }

    .vdp-datepicker__calendar .cell.day-header {
        font-size: 75%;
        white-space: nowrap;
        cursor: inherit;
    }

    .vdp-datepicker__calendar .cell.day-header:hover {
        background: inherit;
    }

    .vdp-datepicker__calendar .month,
    .vdp-datepicker__calendar .year {
        width: 33.333%;
    }

    .vdp-datepicker__clear-button,
    .vdp-datepicker__calendar-button {
        cursor: pointer;
        font-style: normal;
    }

    .vdp-datepicker__clear-button.disabled,
    .vdp-datepicker__calendar-button.disabled {
        color: #999;
        cursor: default;
    }

    /*# sourceURL=Datepicker.vue */
    /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIkRhdGVwaWNrZXIudnVlIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0VBQ0UsY0FBYztBQUNoQjtBQUNBO0VBQ0Usa0JBQWtCO0VBQ2xCLGdCQUFnQjtBQUNsQjtBQUNBO0VBQ0Usc0JBQXNCO0FBQ3hCO0FBQ0E7RUFDRSxrQkFBa0I7RUFDbEIsWUFBWTtFQUNaLGdCQUFnQjtFQUNoQixZQUFZO0VBQ1osc0JBQXNCO0FBQ3hCO0FBQ0E7RUFDRSxjQUFjO0VBQ2QsaUJBQWlCO0FBQ25CO0FBQ0E7RUFDRSxxQkFBcUI7RUFDckIsa0JBQWtCO0VBQ2xCLHlCQUF5QjtFQUN6QixXQUFXO0FBQ2I7QUFDQTs7RUFFRSwwQkFBMEI7RUFDMUIsV0FBVztFQUNYLHFCQUFxQjtFQUNyQixrQkFBa0I7QUFDcEI7QUFDQTs7RUFFRSxXQUFXO0VBQ1gsa0JBQWtCO0VBQ2xCLFNBQVM7RUFDVCxRQUFRO0VBQ1IsNENBQTRDO0VBQzVDLDZCQUE2QjtBQUMvQjtBQUNBO0VBQ0UsNkJBQTZCO0VBQzdCLGlCQUFpQjtBQUNuQjtBQUNBO0VBQ0UsNkJBQTZCO0FBQy9CO0FBQ0E7RUFDRSw0QkFBNEI7RUFDNUIsZ0JBQWdCO0FBQ2xCO0FBQ0E7RUFDRSw0QkFBNEI7QUFDOUI7QUFDQTs7O0VBR0UsZUFBZTtBQUNqQjtBQUNBOzs7RUFHRSxnQkFBZ0I7QUFDbEI7QUFDQTtFQUNFLFdBQVc7RUFDWCxlQUFlO0FBQ2pCO0FBQ0E7RUFDRSxhQUFhO0VBQ2IsY0FBYztFQUNkLGVBQWU7QUFDakI7QUFDQTtFQUNFLHFCQUFxQjtFQUNyQixjQUFjO0VBQ2QsMEJBQTBCO0VBQzFCLFlBQVk7RUFDWixpQkFBaUI7RUFDakIsa0JBQWtCO0VBQ2xCLHNCQUFzQjtFQUN0Qiw2QkFBNkI7QUFDL0I7QUFDQTs7O0VBR0UsZUFBZTtBQUNqQjtBQUNBOzs7RUFHRSxzQkFBc0I7QUFDeEI7QUFDQTtFQUNFLGdCQUFnQjtBQUNsQjtBQUNBO0VBQ0UsZ0JBQWdCO0FBQ2xCO0FBQ0E7RUFDRSxnQkFBZ0I7QUFDbEI7QUFDQTtFQUNFLG1CQUFtQjtBQUNyQjtBQUNBO0VBQ0UsY0FBYztBQUNoQjtBQUNBO0VBQ0UsV0FBVztBQUNiO0FBQ0E7RUFDRSxtQkFBbUI7QUFDckI7QUFDQTtFQUNFLGNBQWM7RUFDZCxtQkFBbUI7RUFDbkIsZUFBZTtBQUNqQjtBQUNBO0VBQ0UsbUJBQW1CO0FBQ3JCO0FBQ0E7O0VBRUUsY0FBYztBQUNoQjtBQUNBOztFQUVFLGVBQWU7RUFDZixrQkFBa0I7QUFDcEI7QUFDQTs7RUFFRSxXQUFXO0VBQ1gsZUFBZTtBQUNqQiIsImZpbGUiOiJEYXRlcGlja2VyLnZ1ZSIsInNvdXJjZXNDb250ZW50IjpbIi5ydGwge1xuICBkaXJlY3Rpb246IHJ0bDtcbn1cbi52ZHAtZGF0ZXBpY2tlciB7XG4gIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgdGV4dC1hbGlnbjogbGVmdDtcbn1cbi52ZHAtZGF0ZXBpY2tlciAqIHtcbiAgYm94LXNpemluZzogYm9yZGVyLWJveDtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIge1xuICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gIHotaW5kZXg6IDEwMDtcbiAgYmFja2dyb3VuZDogI2ZmZjtcbiAgd2lkdGg6IDMwMHB4O1xuICBib3JkZXI6IDFweCBzb2xpZCAjY2NjO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIge1xuICBkaXNwbGF5OiBibG9jaztcbiAgbGluZS1oZWlnaHQ6IDQwcHg7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciBzcGFuIHtcbiAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gIHdpZHRoOiA3MS40Mjg1NzE0Mjg1NzE0MyU7XG4gIGZsb2F0OiBsZWZ0O1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIgLnByZXYsXG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciAubmV4dCB7XG4gIHdpZHRoOiAxNC4yODU3MTQyODU3MTQyODYlO1xuICBmbG9hdDogbGVmdDtcbiAgdGV4dC1pbmRlbnQ6IC0xMDAwMHB4O1xuICBwb3NpdGlvbjogcmVsYXRpdmU7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciAucHJldjphZnRlcixcbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgaGVhZGVyIC5uZXh0OmFmdGVyIHtcbiAgY29udGVudDogJyc7XG4gIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgbGVmdDogNTAlO1xuICB0b3A6IDUwJTtcbiAgdHJhbnNmb3JtOiB0cmFuc2xhdGVYKC01MCUpIHRyYW5zbGF0ZVkoLTUwJSk7XG4gIGJvcmRlcjogNnB4IHNvbGlkIHRyYW5zcGFyZW50O1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIgLnByZXY6YWZ0ZXIge1xuICBib3JkZXItcmlnaHQ6IDEwcHggc29saWQgIzAwMDtcbiAgbWFyZ2luLWxlZnQ6IC01cHg7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciAucHJldi5kaXNhYmxlZDphZnRlciB7XG4gIGJvcmRlci1yaWdodDogMTBweCBzb2xpZCAjZGRkO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIgLm5leHQ6YWZ0ZXIge1xuICBib3JkZXItbGVmdDogMTBweCBzb2xpZCAjMDAwO1xuICBtYXJnaW4tbGVmdDogNXB4O1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIgLm5leHQuZGlzYWJsZWQ6YWZ0ZXIge1xuICBib3JkZXItbGVmdDogMTBweCBzb2xpZCAjZGRkO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIgLnByZXY6bm90KC5kaXNhYmxlZCksXG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciAubmV4dDpub3QoLmRpc2FibGVkKSxcbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgaGVhZGVyIC51cDpub3QoLmRpc2FibGVkKSB7XG4gIGN1cnNvcjogcG9pbnRlcjtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgaGVhZGVyIC5wcmV2Om5vdCguZGlzYWJsZWQpOmhvdmVyLFxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciBoZWFkZXIgLm5leHQ6bm90KC5kaXNhYmxlZCk6aG92ZXIsXG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIGhlYWRlciAudXA6bm90KC5kaXNhYmxlZCk6aG92ZXIge1xuICBiYWNrZ3JvdW5kOiAjZWVlO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuZGlzYWJsZWQge1xuICBjb2xvcjogI2RkZDtcbiAgY3Vyc29yOiBkZWZhdWx0O1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuZmxleC1ydGwge1xuICBkaXNwbGF5OiBmbGV4O1xuICB3aWR0aDogaW5oZXJpdDtcbiAgZmxleC13cmFwOiB3cmFwO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbCB7XG4gIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgcGFkZGluZzogMCA1cHg7XG4gIHdpZHRoOiAxNC4yODU3MTQyODU3MTQyODYlO1xuICBoZWlnaHQ6IDQwcHg7XG4gIGxpbmUtaGVpZ2h0OiA0MHB4O1xuICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gIHZlcnRpY2FsLWFsaWduOiBtaWRkbGU7XG4gIGJvcmRlcjogMXB4IHNvbGlkIHRyYW5zcGFyZW50O1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbDpub3QoLmJsYW5rKTpub3QoLmRpc2FibGVkKS5kYXksXG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5jZWxsOm5vdCguYmxhbmspOm5vdCguZGlzYWJsZWQpLm1vbnRoLFxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbDpub3QoLmJsYW5rKTpub3QoLmRpc2FibGVkKS55ZWFyIHtcbiAgY3Vyc29yOiBwb2ludGVyO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbDpub3QoLmJsYW5rKTpub3QoLmRpc2FibGVkKS5kYXk6aG92ZXIsXG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5jZWxsOm5vdCguYmxhbmspOm5vdCguZGlzYWJsZWQpLm1vbnRoOmhvdmVyLFxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbDpub3QoLmJsYW5rKTpub3QoLmRpc2FibGVkKS55ZWFyOmhvdmVyIHtcbiAgYm9yZGVyOiAxcHggc29saWQgIzRiZDtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgLmNlbGwuc2VsZWN0ZWQge1xuICBiYWNrZ3JvdW5kOiAjNGJkO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbC5zZWxlY3RlZDpob3ZlciB7XG4gIGJhY2tncm91bmQ6ICM0YmQ7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5jZWxsLnNlbGVjdGVkLmhpZ2hsaWdodGVkIHtcbiAgYmFja2dyb3VuZDogIzRiZDtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgLmNlbGwuaGlnaGxpZ2h0ZWQge1xuICBiYWNrZ3JvdW5kOiAjY2FlNWVkO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbC5oaWdobGlnaHRlZC5kaXNhYmxlZCB7XG4gIGNvbG9yOiAjYTNhM2EzO1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbC5ncmV5IHtcbiAgY29sb3I6ICM4ODg7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5jZWxsLmdyZXk6aG92ZXIge1xuICBiYWNrZ3JvdW5kOiBpbmhlcml0O1xufVxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhciAuY2VsbC5kYXktaGVhZGVyIHtcbiAgZm9udC1zaXplOiA3NSU7XG4gIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gIGN1cnNvcjogaW5oZXJpdDtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgLmNlbGwuZGF5LWhlYWRlcjpob3ZlciB7XG4gIGJhY2tncm91bmQ6IGluaGVyaXQ7XG59XG4udmRwLWRhdGVwaWNrZXJfX2NhbGVuZGFyIC5tb250aCxcbi52ZHAtZGF0ZXBpY2tlcl9fY2FsZW5kYXIgLnllYXIge1xuICB3aWR0aDogMzMuMzMzJTtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2xlYXItYnV0dG9uLFxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhci1idXR0b24ge1xuICBjdXJzb3I6IHBvaW50ZXI7XG4gIGZvbnQtc3R5bGU6IG5vcm1hbDtcbn1cbi52ZHAtZGF0ZXBpY2tlcl9fY2xlYXItYnV0dG9uLmRpc2FibGVkLFxuLnZkcC1kYXRlcGlja2VyX19jYWxlbmRhci1idXR0b24uZGlzYWJsZWQge1xuICBjb2xvcjogIzk5OTtcbiAgY3Vyc29yOiBkZWZhdWx0O1xufVxuIl19 */
</style>
</head>

<body class="h-100" data-new-gr-c-s-check-loaded="14.1009.0" data-gr-ext-installed="">
    <div class="main-content">
        <div class="notifications" style="width: 300px; top: 0px; right: 0px;"><span></span></div>
        <!---->
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container p-0"><a href="#/" class="nav-link d-flex align-items-center navbar-brand logo-text router-link-exact-active router-link-active"><img src="https://www.esheba.cnsbd.com/img/cns_e-sheba.png" width="100" height="100" alt="" class="d-inline-block align-top">&nbsp;Bangladesh Railway
                    </a> <button type="button" data-toggle="collapse" data-target="#topNavbarSupportedContent" aria-controls="topNavbarSupportedContent" aria-expanded="false" aria-label="" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
                    <div id="topNavbarSupportedContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-md-auto">
                            <li class="nav-item"><a href="/" class="nav-link router-link-exact-active router-link-active" data-toggle="collapse" data-target=".navbar-collapse.show"> Home <span class="sr-only">(current)</span></a></li>
                            <li class="nav-item"><a href="/login" class="nav-link" data-toggle="collapse" data-target=".navbar-collapse.show">Login</a></li>
                            <li class="nav-item"><a href="/register" class="nav-link" data-toggle="collapse" data-target=".navbar-collapse.show">Click to Register Here</a></li>
                            <!---->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <section class="content">
            <div>
                <header class="masthead text-white ">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 offset-md-3 align-self-center releway-font">
                                <h2 class="font-weight-bold cus-font-size">Welcome to</h2>
                                <h2 class="font-weight-light cus-font-size">Bangladesh Railway</h2>
                                <h2 class="font-weight-bold cus-font-size">E-Ticketing Service</h2>
                            </div>
                        </div>
                    </div>
                </header>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <section class="container pt-5 pb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-2 col-sm-2 mt-1 cus-i-col"><i class="fas fa-tags fa-2x"></i></div>
                                <div class="col-10 col-sm-10">
                                    <h4 class="font-weight-bold">Get Train Tickets from your home</h4>
                                    <p class="font-weight-bold cus-font-col-5">Book train tickets from anywhere using the robust ticketing platform exclusively built to provide the passengers with pleasant ticketing experience. Also check out the mobile app RailSheba to further extend your pleasure of booking train tickets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-2 col-md-2 mt-1  cus-i-col"><i class="far fa-clock fa-2x"></i></div>
                                <div class="col-10 col-md-10">
                                    <h4 class="font-weight-bold">Get All Ticketing related information in one site</h4>
                                    <p class="font-weight-bold cus-font-col-5">Checkout available seats, route information, fare information on real time basis with Esheba Platform.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-2 col-md-2 mt-1  cus-i-col"><i class="fas fa-lock fa-2x"></i></div>
                                <div class="col-10 col-md-10">
                                    <h4 class="font-weight-bold">We guarantee safe payment</h4>
                                    <p class="font-weight-bold cus-font-col-5">Pay using your convenient payment option. Bangladesh Railway supports Visa, Master, Amex &amp; Nexus Cards, Rocket and bKash Mobile Financial Services for your convenience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 mb-5">
                        <div class="col-md-12 cus-b-bor1 cus-t-bor pt-3 pb-3 text-center"><img src="img/1.png" alt="" class="img-fluid mr-2"> <img src="img/2.png" alt="" class="img-fluid mr-2"> <img src="img/3.png" alt="" class="img-fluid mr-2"> <img src="img/4.png" alt="" class="img-fluid mr-2"> <img src="img/5.png" alt="" class="img-fluid mr-2"> <img src="img/6.png" alt="" class="img-fluid mr-2"></div>
                    </div>
                </section>
            </div>
        </section>
        <footer class="text-white container-fluid ">
            <div class="row  bg-primary">
                <div class="container">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6  d-md-none"><img src="/img/cns-logo.png" alt="Computer Network System Ltd." class="card-img-bottom float-right" style="width: 150px;"></div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6 d-none d-md-block"><img src="/img/cns-logo.png" alt="Created by: Arjun - 18101419" class="img-fluid float-md-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


</body>

</html>