<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Contacto;
use App\Mail\FormularioContacto as MailFormulario;
use Illuminate\Support\Facades\Mail;
class FormularioContacto extends Controller
{
    public function formularioContactoUsuario(Request $request)
    {
        try{
            DB::beginTransaction();
            $contacto = new Contacto();
            $contacto->fill($request->all());
            $contacto->save();
            Mail::to(['beenjaahp@hotmail.com',
                  'beenjaahp@gmail.com'])
            ->send(new MailFormulario($contacto));

            DB::commit();
            return response()->json(['message' => 'Guardado correctamente'], 200);
        } catch (ModelNotFoundException $e) {
            DB::rollback();
            return response()->json(['message' => $e->getMessage()], 500);
        } catch (QueryException $e) {
            DB::rollback();
            return response()->json(['message' => $e->getMessage()], 500);
        } catch (DecryptException $e) {
            DB::rollback();
            return response()->json(['message' => $e->getMessage()], 500);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
