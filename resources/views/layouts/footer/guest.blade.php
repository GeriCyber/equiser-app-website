<!-- Footer Section -->
<div class="footer">
    <div class="row d-flex align-items-center">
        <div class="col-md-12 text-center">
            <img src="{{asset('images')}}\logo.png" width="200" alt="Equiser Logo">
            <ul class="footer-menu pb-2">
                <li>
                    <form class="d-inline" action="{{ route('welcome.country', 'country') }}" method="post">
                        @csrf
                        @method('put')
                        <input type="hidden" id="country" name="country" value="venezuela">
                        <button class="btn-transparent" type="submit" title="Venezuela"> <img src="{{asset('images')}}\iconos\venezuela.svg" width="30"></button>
                    </form>
                </li>
                <li>
                    <form class="d-inline" action="{{ route('welcome.country', 'country') }}" method="post">
                        @csrf
                        @method('put')
                        <input type="hidden" id="country" name="country" value="colombia">
                        <button class="btn-transparent" type="submit" title="Colombia"> <img src="{{asset('images')}}\iconos\colombia.svg" width="30"></button>
                    </form>
                </li>
                <li>
                    <form class="d-inline" action="{{ route('welcome.country', 'country') }}" method="post">
                        @csrf
                        @method('put')
                        <input type="hidden" id="country" name="country" value="panama">
                        <button class="btn-transparent" type="submit" title="Panamá"> <img src="{{asset('images')}}\iconos\panama.svg" width="30"></button>
                    </form>
                </li>
                <li>
                    <form class="d-inline" action="{{ route('welcome.country', 'country') }}" method="post">
                        @csrf
                        @method('put')
                        <input type="hidden" id="country" name="country" value="usa">
                        <button class="btn-transparent" type="submit" title="Estados Unidos"> <img src="{{asset('images')}}\iconos\united-states.svg" width="30"></button>
                    </form>
                </li>
            </ul>
            <ul class="footer-menu text-center">
                <li><a title="Instagram" target="_blank" href="https://www.instagram.com/gruasequiser"><img src="{{asset('images')}}\iconos\instagram2.svg" width="30"></a></li>
                <li><a title="Facebook" target="_blank" href="https://www.facebook.com/Equiser1"><img src="{{asset('images')}}\iconos\facebook-logo-in-circular.svg" width="30"></a></li>
                <li><a title="Twitter" target="_blank" href="https://twitter.com/gruasequiser"><img src="{{asset('images')}}\iconos\twitter-circular-button.svg" width="30"></a></li>
                <li><a title="WhatsApp" target="_blank" href="#"><img src="{{asset('images')}}\iconos\whatsapp-logo-variant.svg" width="30"></a></li>
            </ul>
            
        </div>

        <div class="col-md-12 copyright">
            <div class="footer-text text-center">
                <p>
                    © 2019 <a class="equiser-color-2" href="{{url('/')}}">Equiser</a> | All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</div>

    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- Back to Top End -->