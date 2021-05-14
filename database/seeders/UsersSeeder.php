<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'    => 'admin user',
            'email'       => 'admin@example.com',
            'password'    => Hash::make('passwort'),
            'hat_gespielt' => 1,
        ]);
        
        DB::table('users')->insert(['name' =>'Manuela Engeli','email' => 'manuela.engeli@ajb.zh.ch','password' => Hash::make('pdc515'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Ladina Gartmann','email' => 'ladina.gartmann@ajb.zh.ch','password' => Hash::make('sbt712'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Gabriela Leuthard','email' => 'gabriela.leuthard@ajb.zh.ch','password' => Hash::make('dcm727'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Ursula Peier','email' => 'ursula.peier@ajb.zh.ch','password' => Hash::make('zms206'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Ulrike Allmann','email' => 'ulrike.allmann@ajb.zh.ch','password' => Hash::make('gtl271'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Aisha Kaufmann','email' => 'aisha.kaufmann@ajb.zh.ch','password' => Hash::make('gab867'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Miriam Bühler','email' => 'miriam.buehler@ajb.zh.ch','password' => Hash::make('fdo801'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Anne Gernhardt','email' => 'anne.gernhardt@ajb.zh.ch','password' => Hash::make('xss104'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Nicolai Neijhoft','email' => 'nicolai.neijhoft@ajb.zh.ch','password' => Hash::make('zea959'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Elisabete Salomon','email' => 'elisabete.salomon@ajb.zh.ch','password' => Hash::make('cpi220'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Patricia Salomon','email' => 'patricia.salomon@ajb.zh.ch','password' => Hash::make('oux912'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Jean Claude Nüsperli','email' => 'jean-claude.nuesperli@ajb.zh.ch','password' => Hash::make('gpx197'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Vanessa Mungo','email' => 'vanessa.mungo@ajb.zh.ch','password' => Hash::make('ftv875'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Cornelia Gebert','email' => 'cornelia.gebert@ajb.zh.ch','password' => Hash::make('oxl337'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Cristina Vasella','email' => 'cristina.vasella@ajb.zh.ch','password' => Hash::make('lgt103'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Simona Ninni','email' => 'simona.ninni@ajb.zh.ch','password' => Hash::make('alu797'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Jael Santos','email' => 'jaelelena.santos@ajb.zh.ch','password' => Hash::make('uig160'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Marianne Berchtold','email' => 'marianne.berchtold@ajb.zh.ch','password' => Hash::make('xbm957'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Barbara Coray','email' => 'barbara.coray@ajb.zh.ch','password' => Hash::make('wfi604'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Stefan Roderer','email' => 'stefan.roderer@ajb.zh.ch','password' => Hash::make('ncy499'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Matthias Maier','email' => 'matthias.maier@ajb.zh.ch','password' => Hash::make('jik952'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Rübenacker Rübenacker','email' => 'stefanie.ruebenacker@ajb.zh.ch','password' => Hash::make('iwk156'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Sabrina Heberle','email' => 'sabrina.heberle@ajb.zh.ch','password' => Hash::make('dnq278'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Heidi Steinegger','email' => 'heidi.steinegger@ajb.zh.ch','password' => Hash::make('tko183'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Anja Bellaggio','email' => 'anja.bellaggio@ajb.zh.ch','password' => Hash::make('vsv694'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Daniela Sgier','email' => 'daniela.sgier@ajb.zh.ch','password' => Hash::make('ori231'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Roland Schneider','email' => 'roland.schneider@ajb.zh.ch','password' => Hash::make('ynl124'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Negar Ghaffari Nasab','email' => 'negar.ghaffari@ajb.zh.ch','password' => Hash::make('tzo943'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Susanne Roth','email' => 'susanne.roth@ajb.zh.ch','password' => Hash::make('rdj220'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Alexander Jungi','email' => 'alexander.jungi@ajb.zh.ch','password' => Hash::make('awf975'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Erika Koller','email' => 'erika.koller@ajb.zh.ch','password' => Hash::make('fat409'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Carole Johner','email' => 'carole.johner@ajb.zh.ch','password' => Hash::make('tym237'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Can Alaca','email' => 'can.alaca@ajb.zh.ch','password' => Hash::make('mrn862'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Kohler Cécile','email' => 'cecile.kohler@ajb.zh.ch','password' => Hash::make('bbk434'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Dimitra Zafiropoulos','email' => 'dimitra.zafiropoulos@ajb.zh.ch','password' => Hash::make('jme382'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Martina Wider','email' => 'martina.wider@ajb.zh.ch','password' => Hash::make('ook372'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Viktor Boller','email' => 'viktor.boller@ajb.zh.ch','password' => Hash::make('iau469'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Marianne Küng','email' => 'marianne.kueng@ajb.zh.ch','password' => Hash::make('qko124'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Simone Heeroo','email' => 'simone.heeroo@ajb.zh.ch','password' => Hash::make('poe816'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Nadja Gut','email' => 'nadja.gut@ajb.zh.ch','password' => Hash::make('eqx571'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Daniela Ott','email' => 'daniela.ott@ajb.zh.ch','password' => Hash::make('xst574'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Martina Friedli','email' => 'martina.friedli@ajb.zh.ch','password' => Hash::make('kpt400'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Claudia Meier','email' => 'claudia.meier-waldvogel@ajb.zh.ch','password' => Hash::make('bna263'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Marco Suter','email' => 'marco.suter@ajb.zh.ch','password' => Hash::make('bvr333'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Mirjam Bugmann','email' => 'mirjam.bugmann@ajb.zh.ch','password' => Hash::make('nla946'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Barbara Gemperle','email' => 'barbara.gemperle@ajb.zh.ch','password' => Hash::make('oee986'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Sandra Stylianou','email' => 'sandra.stylianou@ajb.zh.ch','password' => Hash::make('lnl169'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Janina Noser','email' => 'janina.noser@ajb.zh.ch','password' => Hash::make('fsp499'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Armin Malär','email' => 'armin.malaer@ajb.zh.ch','password' => Hash::make('bkj265'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Kristijan Bilic','email' => 'kristijan.bilic@ajb.zh.ch','password' => Hash::make('syi721'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Mara Ilari','email' => 'mara.ilari@ajb.zh.ch','password' => Hash::make('xpj732'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Sté Haltiner','email' => 'stephan.haltiner@ajb.zh.ch','password' => Hash::make('fsw129'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Domenico Fasanella','email' => 'domenico.fasanella@ajb.zh.ch','password' => Hash::make('hqv791'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Beatrice  Rutz','email' => 'beatrice.rutz@ajb.zh.ch','password' => Hash::make('nbj123'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Kathrin Pfister','email' => 'kathrin.pfister@ajb.zh.ch','password' => Hash::make('ygr705'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Katja Peitz','email' => 'katja.peitz@ajb.zh.ch','password' => Hash::make('ucr472'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Sabine Saladin','email' => 'sabine.saladin@ajb.zh.ch','password' => Hash::make('ekp906'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'André Woodtli','email' => 'andre.woodtli@ajb.zh.ch','password' => Hash::make('udc477'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Franziska Brägger','email' => 'franziska.braegger@ajb.zh.ch','password' => Hash::make('poc810'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Renate Trachtenberg','email' => 'renate.trachtenberg@ajb.zh.ch','password' => Hash::make('ewn785'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Rico Loppacher','email' => 'rico.loppacher@ajb.zh.ch','password' => Hash::make('slc994'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Karin Jost','email' => 'karin.jost@ajb.zh.ch','password' => Hash::make('xjg990'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Brigitte Nanon','email' => 'brigitte.nanon@ajb.zh.ch','password' => Hash::make('tws451'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Christine Viljehr','email' => 'christine.viljehr@ajb.zh.ch','password' => Hash::make('dll295'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Monika Leu - Logo bin ich dabei! :-)','email' => 'monika.leu@ajb.zh.ch','password' => Hash::make('lup518'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Lukas Helbling','email' => 'lukas.helbling@ajb.zh.ch','password' => Hash::make('opn216'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Ingrid Faesi','email' => 'ingrid.faesi@ajb.zh.ch','password' => Hash::make('qjd208'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Simone Bajeux','email' => 'simone.bajeux@ajb.zh.ch','password' => Hash::make('yya197'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Iris Geissbühler-Kilchsperger','email' => 'iris.geissbuehler@ajb.zh.ch','password' => Hash::make('uni833'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Olivia Gross','email' => 'olivia.gross@ajb.zh.ch','password' => Hash::make('rqn787'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Christoph Laube','email' => 'christoph.laube@ajb.zh.ch','password' => Hash::make('yru723'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Jasmina Todorovic','email' => 'jasmina.todorovic@ajb.zh.ch','password' => Hash::make('akx843'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Barbara Denzler','email' => 'barbara.denzler@ajb.zh.ch','password' => Hash::make('sqj864'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Katharina Gubler','email' => 'katharina.gubler@ajb.zh.ch','password' => Hash::make('fiu318'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Marleen Weber','email' => 'marleen.weber@ajb.zh.ch','password' => Hash::make('yta978'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Michael Just','email' => 'michael.just@ajb.zh.ch','password' => Hash::make('fcm899'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Michael Solari','email' => 'michael.solari@ajb.zh.ch','password' => Hash::make('scs318'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Monika Allenspach','email' => 'monika.allenspach@ajb.zh.ch','password' => Hash::make('gma624'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Priska Seeger','email' => 'priska.seeger@ajb.zh.ch','password' => Hash::make('xpn988'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Bettina Walthert','email' => 'bettina.walthert@ajb.zh.ch','password' => Hash::make('ddg333'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Cynthia Furrer','email' => 'cynthia.furrer@ajb.zh.ch','password' => Hash::make('ibs469'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Keller Anna Lena','email' => 'annalena.keller@ajb.zh.ch','password' => Hash::make('fcb534'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Jonilla Keller','email' => 'jonilla.keller@ajb.zh.ch','password' => Hash::make('nik116'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Brigitte Lanz','email' => 'brigitte.lanz@ajb.zh.ch','password' => Hash::make('szy142'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Mara Locati','email' => 'mara.locati@ajb.zh.ch','password' => Hash::make('vpe537'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Madlaina Bezzola','email' => 'madlaina.bezzola@ajb.zh.ch','password' => Hash::make('ckb653'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'brigitte rodel','email' => 'brigitte.rodel@ajb.zh.ch','password' => Hash::make('day326'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Elin Villiger','email' => 'elin.villiger@ajb.zh.ch','password' => Hash::make('zmx555'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Lukas Köhler','email' => 'lukas.koehler@ajb.zh.ch','password' => Hash::make('kxe256'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Tobias Widmer','email' => 'tobias.widmer@ajb.zh.ch','password' => Hash::make('jzx146'), 'hat_gespielt' =>0,]);
        DB::table('users')->insert(['name' =>'Nadia Bisang','email' => 'nadia.bisang@ajb.zh.ch','password' => Hash::make('fai548'), 'hat_gespielt' =>0,]);




    }
}
