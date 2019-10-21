<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoSite extends Mailable
{
    use Queueable, SerializesModels;
    protected $dados;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($registro)
    {
        $this->dados = $registro;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->dados);
        return $this->view('emails.contato')
            ->with([
                'nome' => $this->dados['nome'],
                'telefone' => $this->dados['telefone'],
                'mensagem' => $this->dados['mensagem'],
            ]);
    }
}
