<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    //
    protected $fillable = ['dependecia_id','rubro_id','unidad_id','nombre','tipo','descripcion','fun_legal','doc_obtener','direccion_web','vigencia','duracion','casos','criterios','duracion','tiempo_rep','costo','formapago','dondepag','alternativa_pago','elabora','revisa','autoriza','vbpresidencia'];

  // protected $appends = ['oficinaDepedencia','oficinaUnidad','oficinaOtros'];

    protected $appends = ['tituloElabora','tituloAutoriza','tituloRevisa','formaDePago','oficinaDepedencia','oficinaUnidad','oficinaOtro','requisitosFisicas','requisitosMorales','requisitosInstituciones'];

    public function rubro() {
        return $this->belongsTo(Rubro::class);
   }


   	public function unidad() {
        return $this->belongsTo(Unidad::class);
   }


   	public function dependencia() {
        return $this->belongsTo(Dependencia::class);
   }


	public function oficina() {
        return $this->hasMany(Oficina::class);
   }



	public function pregunta() {
        return $this->hasMany(Pregunta::class);
   }

   public function fundamento() {
          return $this->hasMany(Fundamento::class);
     }

   public function requisito() {
          return $this->hasMany(Requisito::class);
     }

     public function GetOficinaDepedenciaAttribute(){
       return $this->oficina()->where('tipo', 'dependencia')->get();

     }


     public function GetOficinaUnidadAttribute(){
       return $this->oficina()->where('tipo', 'unidad')->get();

     }


     public function GetOficinaOtroAttribute(){
       return $this->oficina()->where('tipo', 'otro')->get();

     }

     public function GetRequisitosFisicasAttribute(){
       return $this->requisito()->where('tipo', 'Personas Físicas')->get();

     }

     public function GetRequisitosMoralesAttribute(){
       return $this->requisito()->where('tipo', 'Personas Morales')->get();

     }

     public function GetRequisitosInstitucionesAttribute(){
       return $this->requisito()->where('tipo', 'Instituciones Públicas')->get();
     }


     public function GetFormaDePagoAttribute(){
        $pagoString=$this->formapago;

        $data=['efectivo'=>0,'credito'=>0,'debito'=>0,'linea'=>0,'otro'=>0];


        if (strpos($pagoString, 'Efectivo') !== false) {
            $data['efectivo']=1;

        }



        if (strpos($pagoString, 'Crédito') !== false) {
            $data['credito']=1;

        }

        if (strpos($pagoString, ' Débito') !== false) {
            $data['debito']=1;

        }




        return $data;
     }


     public function GetTituloElaboraAttribute(){
        $puestoString=$this->puesto_elabora;

                if (strpos($puestoString, 'Dirección de') !== false) {


                  $puestoString= str_replace("Dirección de","",$puestoString);


                    return "Directora o Director de ".$puestoString;
                }

                if (strpos($puestoString, 'Procuraduría') !== false) {
                    return "Titular de la ".$puestoString;
                }

                if (strpos($puestoString, 'Órgano de Control Interno') !== false) {
                    return "Titular del ".$puestoString;
                }



        if (strpos($puestoString, 'Organo') !== false) {
            return "Titular del ".$puestoString;

        }
        if (strpos($puestoString, 'Departamento') !== false) {
            return "Jefa o Jefe del ".$puestoString;

        }

        if (strpos($puestoString, 'Coordinación') !== false) {

        $puestoString= str_replace("Coordinación de","",$puestoString);

            return "Coordinador o Coordinadora de ".$puestoString;

        }


        if (strpos($puestoString, 'Unidad') !== false) {
          return "Titular de la ".$puestoString;

        }

        if (strpos($puestoString, 'Contraloría Municipal') !== false) {
            return "Contralor Municipal";
        }

  if (strpos($puestoString, 'Centro de Rehabilitación') !== false) {
      return "Titular del ".$puestoString;
  }


     }

     public function GetTituloRevisaAttribute(){
        $puestoString=$this->puesto_revisa;

        if (strpos($puestoString, 'Dirección de') !== false) {


          $puestoString= str_replace("Dirección de","",$puestoString);


            return "Directora o Director de ".$puestoString;
        }



                if (strpos($puestoString, 'OPERAGUA') !== false) {
                    return "Directora o Director de ".$puestoString;
                }
                if (strpos($puestoString, 'Tesorería Municipal') !== false) {
                    return "Tesorero Municipal";
                }
                if (strpos($puestoString, 'Instituto') !== false) {
                    return"Titular del ".$puestoString;
                }

                if (strpos($puestoString, 'Subtesorería de Ingresos') !== false) {
                    return "Subtesorero o Subtesorera de  Ingresos ".$puestoString;
                }

                if (strpos($puestoString, 'Secretaría del Ayuntamiento') !== false) {
                    return "Secretario o Secretaria del Ayuntamiento ".$puestoString;
                }


                if (strpos($puestoString, 'Órgano de Control Interno') !== false) {
                    return "Titular del ".$puestoString;
                }

                if (strpos($puestoString, 'Coordinación') !== false) {

                $puestoString= str_replace("Coordinación de","",$puestoString);

                    return "Coordinador o Coordinadora de ".$puestoString;

                }




          return "Titular de la ".$puestoString;






     }





     public function GetTituloAutorizaAttribute(){
        $puestoString=$this->puesto_autoriza;


        if (strpos($puestoString, 'Dirección General') !== false) {


          $puestoString= str_replace("Dirección General","",$puestoString);


            return "Directora o Director General ".$puestoString;
        }



                if (strpos($puestoString, 'OPERAGUA') !== false) {
                    return "Directora o Director de ".$puestoString;
                }

                if (strpos($puestoString, 'Tesorería Municipal') !== false) {
                    return "Tesorero Municipal";
                }


                if (strpos($puestoString, 'Contraloría Municipal') !== false) {
                    return "Contralor Municipal";
                }

                if (strpos($puestoString, 'Instituto') !== false) {
                    return"Titular del ".$puestoString;
                }

                if (strpos($puestoString, 'DIF') !== false) {
                    return"Titular del ".$puestoString;
                }





          return "Titular de la ".$puestoString;






     }



}
