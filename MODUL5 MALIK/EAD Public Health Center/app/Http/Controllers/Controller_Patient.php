    <?php

    namespace App\Http\Controllers;

    use App\Models\Patient;
    use App\Models\Vaccine;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class Controller_Patient extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function indek()
        {
            $total = DB::table('patients')->count();
            $patient = Patient::join('vaccines','vaccines.id' ,'=', 'patients.vaccine_id')->get(['patients.*', 'vaccines.name AS vaccine']);
            return view('patient', compact('patient', 'total'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create($id)
        {
            $vaccine = Vaccine::find($id);
            return view("input_patient",compact("vaccine"));
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */

        public function daftar()
        {
            $total = DB::table('Vaccines')->count();
            $vaccines = Vaccine::orderBy('id')->get();
            return view('daftar', compact('vaccines', 'total'));
        }

        public function store(Request $request)
        {
            $gambar = time() . $request->KTP->getClientOriginalName() . '.' . $request->KTP->extension();
            $request->KTP->move(public_path(''), $gambar);
            Patient::create([
                "vaccine_id" => $request -> v_id,
                "name" => $request -> p_name,
                "nik" => $request -> NIK,
                "alamat" => $request -> alamat,
                "image_ktp" => $gambar,
                "no_hp" => $request -> hp,
            ]);
            return redirect("/patient");
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $data_sebelumnya = Patient::find($id);
            $vaksin = Vaccine::find($data_sebelumnya->vaccine_id);
            return view("edit_patient",compact("data_sebelumnya","vaksin"));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            $gambar = time() . $request->KTP->getClientOriginalName() . '.' . $request->KTP->extension();
            $request->KTP->move(public_path(''), $gambar);
            Patient::find($id)->update([
                "vaccine_id" => $request -> v_id,
                "name" => $request -> p_name,
                "nik" => $request -> NIK,
                "alamat" => $request -> alamat,
                "image_ktp" => $gambar,
                "no_hp" => $request -> hp,
            ]);
            return redirect("/patient");
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            Patient::find($id) -> delete();
            return redirect("/patient");
        }
    }
