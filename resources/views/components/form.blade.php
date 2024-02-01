<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-8">
            <div class="mb-3">
                <form action="{{route('contactmail')}}" method="POST" >
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome Cognome</label>
                        <input  name="name" type="text" class="form-control"  aria-describedby="emailHelp">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input  name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div> 
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
            {{--
            <form>:
                
                Questo tag HTML delinea l'inizio di un modulo di invio. I moduli consentono agli utenti di inserire dati che possono poi essere inviati al server per l'elaborazione.
                
                action="{{ route('contactmail') }}":
                
                L'attributo action definisce l'URL a cui verranno inviati i dati del form quando l'utente fa clic sul pulsante di invio. In questo caso, sta utilizzando l'helper route di Laravel per generare un URL basato sul nome della rotta. Il nome della rotta specificato è 'contactmail' 
                
                method="POST":
                
                L'attributo method specifica il metodo di invio dei dati del form al server. In questo caso, il metodo è POST. Questo significa che i dati del form saranno inviati nel corpo della richiesta HTTP, nascosti dalla vista dell'utente.
                
                @csrf:
                L'helper @csrf è una direttiva di Blade che inserisce un campo nascosto nel form, contenente un token CSRF (Cross-Site Request Forgery). Il token CSRF è una misura di sicurezza che protegge contro attacchi di tipo CSRF. Laravel richiede che il token CSRF sia presente in ogni richiesta HTTP di tipo POST. In questo modo, Laravel può verificare che la richiesta POST provenga effettivamente dal tuo sito e non da una fonte esterna.

                La direttiva @csrf genera automaticamente un campo nascosto nel form che contiene il token CSRF. Quando invii il form, questo token viene incluso nella richiesta e Laravel lo verifica per garantire che la richiesta sia legittima.

                --}}