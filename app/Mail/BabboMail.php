<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BabboMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     * public $contact;:

     * Questo è un membro pubblico della classe che memorizzerà l'oggetto di contatto. Presumibilmente, l'oggetto di contatto contiene le informazioni inserite dall'utente attraverso il modulo di contatto, e verrà utilizzato per personalizzare il contenuto dell'email.

     * public function __construct($contact) { ... }:


     * Il costruttore della classe accetta un parametro $contact e imposta il membro pubblico $this->contact su questo valore. In pratica, quando viene creata un'istanza di questa classe, è necessario passare un oggetto di contatto come argomento.
     */
    public $contact;
    public function __construct($contact)
    {
    $this->contact =$contact;
    
        //
    }

    /**
     * Get the message envelope.
     * public function envelope(): Envelope { ... }:
     * Questo metodo restituisce un oggetto Envelope che rappresenta l'involucro dell'email. In questo caso, la funzione envelope restituisce un oggetto Envelope con un oggetto subject impostato su 'Babbo Mail', che sarà il soggetto dell'email.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Babbo Mail',
        );
    }

    /**
     * Get the message content definition.
     * public function content(): Content { ... }:
     * Questo metodo restituisce un oggetto Content che rappresenta il contenuto dell'email. La funzione content restituisce un oggetto Content con un attributo view impostato su 'mail.contactmail'. Questo indica che il contenuto dell'email sarà preso dalla vista Blade denominata 'mail.contactmail'. In altre parole, il corpo dell'email sarà generato utilizzando il file Blade contactmail.blade.php nella directory resources/views/mail.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.contactmail',
        );
    }

    /**
     * Get the attachments for the message.
     * public function attachments(): array { ... }:
     * Questo metodo restituisce un array vuoto di allegati. Se avessi bisogno di allegare file all'email, dovresti definire questi allegati all'interno di questo metodo.
     * 
     
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
/**
 *In breve, questa classe Mailable è configurata per inviare un'email con un soggetto specifico ('Babbo Mail') e un corpo generato da una vista Blade ('mail.contactmail'). L'oggetto di contatto passato al costruttore è probabilmente utilizzato all'interno della vista Blade per personalizzare il contenuto dell'email.
 */
