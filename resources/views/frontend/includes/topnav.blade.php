
<style>
    .topnavicons{
        font-size: 24px;
        color: var(--white) !important;
        
    }
    .topnavicons i{
        margin:8px 2px;
        color: var(--white)  !important;
    }
</style>
<section class="topheader ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left col-sm-12">
            <div class="social-buttons">
                                <a href="{{ $sitesetting->facebook_link }}"
                                    class="social-buttons__button topnavicons"
                                    aria-label="Facebook">
                                
                                        <i class="fab fa-facebook-f"></i>
                              
                                </a>
                                <a href="{{ $sitesetting->linkedin_link }}"
                                    class="social-buttons__button topnavicons "
                                    aria-label="LinkedIn">
                                  
                                        <i class="fab fa-linkedin-in"></i>
                         
                                </a>
                                <a href="{{ $sitesetting->instagram_link }}" target="_blank"
                                    class="social-buttons__button topnavicons "
                                    aria-label="InstaGram">
                                        <i class="fab fa-instagram"></i>
                                </a>
                            </div>
            </div>
            <div class="col-md-6 col-sm-12 top_right row">
                <div class="info d-flex align-items-center col-md-4">
                    <i class="fa fa-phone mt-1 mx-1"></i>
                    <span>
                        @if (!empty($sitesetting->office_contact))
                            @php
                                $officeContacts = json_decode($sitesetting->office_contact, true);
                                $latestContact = is_array($officeContacts) ? end($officeContacts) :
                                    (app()->getLocale() == 'ne' ? $sitesetting->office_contact_ne : $sitesetting->office_contact);
                            @endphp
                            {{ $latestContact }}
                        @endif
                    </span>
                </div>
                <div class="info d-flex align-items-center col-md-4">
                    <i class="fa-solid fa-location-dot mt-1 mx-1"></i>
                    <span>
                        @if (!empty($sitesetting->office_address))
                            @php
                                $officeAddresses = json_decode($sitesetting->office_address, true);
                                $latestAddress = is_array($officeAddresses) ? end($officeAddresses) :
                                    (app()->getLocale() == 'ne' ? $sitesetting->office_address_ne : $sitesetting->office_address);
                            @endphp
                            {{ $latestAddress }}
                        @endif
                    </span>
                </div>
                <div class="info d-flex align-items-center col-md-4">
                    <i class="fa-solid fa-envelope mt-1 mx-1"></i>
                    <span>
                        @if (!empty($sitesetting->office_email))
                            @php
                                $officeEmails = json_decode($sitesetting->office_email, true);
                                $latestEmail = is_array($officeEmails) ? end($officeEmails) :
                                    (app()->getLocale() == 'ne' ? $sitesetting->office_email_ne : $sitesetting->office_email);
                            @endphp
                            {{ $latestEmail }}
                        @endif
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>







