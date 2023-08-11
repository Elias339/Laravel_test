<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Http\Requests\CompanyRequest;
use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;

class HomeController extends Controller
{
      public function AddCompany(CompanyRequest $request)
      {

          $image = $request->file('image');
          $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
          $request->image->move(public_path('upload'),$img_name);
          $img_url = 'upload/' . $img_name;

          Company::insert([
              'company_name' => $request->company_name,
              'email' => $request->email,
              'image' => $img_url,
              'url' => $request->url,
          ]);

          return back();
      }

      public function CompanyList()
      {
          $companies=Company::latest()->get();

          return view('admin.company',compact('companies'));
      }



      public function EditCompany($id)
      {
          $companyinfo= Company::findorFail($id);
          return view('admin.editcompany',compact('companyinfo'));
      }

    public function UpdateCompany(Request $request)
    {
        $id= $request->id;

        $image = $request->file('image');
        $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $request->image->move(public_path('upload'),$img_name);
        $img_url = 'upload/' . $img_name;

        Company::findorFail($id)->update([
            'company_name' => $request->company_name,
            'email' => $request->email,
            'image' => $img_url,
            'url' => $request->url,
        ]);

        return redirect();
    }

    public function DeleteCompany($id)
    {
        Company::findorFail($id)->delete();
        return back();
    }






    public function AddEmployee(EmployeeRequest $request)
    {

        Employee::insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company' => $request->company,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return back()->with('message','info save');
    }

    public function EmployeeList()
    {
        $employees=Employee::latest()->get();

        return view('admin.employee',compact('employees'));
    }

    public function EditEmployee($id)
    {
        $employeeinfo= Employee::findorFail($id);
        return view('admin.editemployee',compact('employeeinfo'));
    }

    public function UpdateEmployee(Request $request)
    {
        $id= $request->id;

        Employee::findorFail($id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company' => $request->company,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('employee_list');

    }

    public function DeleteEmployee($id)
    {
        Employee::findorFail($id)->delete();
        return back();
    }



}
