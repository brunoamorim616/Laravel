<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App;

class PopularTabela extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:popular';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Preenche Tabelas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $arrayCategorias = array("Ferramentas", "Móveis", "Auto Shop", "Brinquedos");
        
        foreach ($arrayCategorias as $cat)
        {
            $categoria = new App\Categoria();
            $categoria->nomcat = $cat;
            $categoria->save();
        }
        
        $arrayProdutos [] = array("Celular", "Alta Performance", 90.00, 2);
        $arrayProdutos [] = array("Martelo", "Resistente", 50.00, 3);
        $arrayProdutos [] = array("Lâmparina", "Decorativo", 30.00, 4);
        $arrayProdutos [] = array("Paletes", "Super Slide", 100.00, 5);
        
        foreach ($arrayProdutos as $pro)
        {
            $produto = new App\Produto();
            $produto->nompro = $pro[0];
            $produto->despro = $pro[1];
            $produto->vlrpro = $pro[2];
            $produto->codcat = $pro[3];
            $produto->save();
        }
        
        $arrayClientes [] = array("Bruno", "99898787656", "Na puta que pariu",
            34567, "Ceroulas", "Canelas", "SC", "479989098");
        $arrayClientes [] = array("Bruno", "99898787656", "Na puta que pariu",
            34567, "Ceroulas", "Canelas", "SC", "479989098");
        $arrayClientes [] = array("Bruno", "99898787656", "Na puta que pariu",
            34567, "Ceroulas", "Canelas", "SC", "479989098");
        $arrayClientes [] = array("Bruno", "99898787656", "Na puta que pariu",
            34567, "Ceroulas", "Canelas", "SC", "479989098");
        
        foreach ($arrayClientes as $cli)
        {
            $cliente = new App\Cliente();
            $cliente->nomcli = $cli[0];
            $cliente->cpfcli = $cli[1];
            $cliente->endcli = $cli[2];
            $cliente->numcli = $cli[3];
            $cliente->baicli = $cli[4];
            $cliente->cidcli = $cli[5];
            $cliente->ufcli = $cli[6];
            $cliente->telcli = $cli[7];
            $cliente->save();
        }
    }
}
