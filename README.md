AnsFormBuilder
=================

AnsFormBuilder was created by and is maintained by [Mohammad Al-Nur Sarwer Arif](https://github.com/alnurarif). It was created to create form's input easily.


## Installation


To get the latest version you need only require the package via Composer.
```
Composer require alnurarif/AnsFormBuilder
```
Manually add the package the following providers should be added in your config/app.php:
```
Ans\Ansformbuilder\AnsFormBuilderServiceProvider::class
```
## Usage

```
use Illuminate\Support\Facades\Route;
use Ans\Ansformbuilder\Ansformbuilder;

Route::get('/test', function () {

    //Instantiage the inputs object
    $name = new Ansformbuilder;
    $password = new Ansformbuilder;
    $students = new Ansformbuilder;
    $departments = new Ansformbuilder;
    $skills = new Ansformbuilder;

    //Set the data for input tag and get and data array
    $nameData = $name->createInput()
    ->setInputType('text')
    ->setName('name')
    ->setClasses(['destined', 'parked', 'hallow'])
    ->setID('name')
    ->setRequired(true)
    ->setInputValue('Test Name')
    ->getData();

    //Set the data for input tag which is password type and get the data array
    $passwordData = $password->createInput()
    ->setInputType('password')
    ->setName('password')
    ->setClasses(['destined', 'parked', 'hallow'])
    ->setID('password')
    ->setRequired(true)
    ->setInputValue('Test Name')
    ->getData();

    //Set the data for select tag data and get the data array        
    $studentsData = $students->createSelect()
    ->setName('students')
    ->setClass('maki')
    ->setID('ulah')
    ->setValues([1=>'ahmed', 2=>'rakib', 3=>'sultan'])
    ->setActiveValue(1)
    ->setRequired(true)
    ->getData();

    //Set the data for radio data and get the data array
    $departmentsData = $departments->createRadio()
    ->setName('students')
    ->setClass('maki')
    ->setID('ulah')
    ->setValues([1=>'science', 2=>'commerce', 3=>'arts'])
    ->setActiveValue(2)
    ->setRequired(true)
    ->getData();

    //Set the data for checkbox data and get the data array
    $skillsData = $skills->createCheckbox()
    ->setName('skills')
    ->setClass('maki')
    ->setID('ulah')
    ->setValues([1=>'php', 2=>'javascript', 3=>'mysql'])
    ->setActiveValue(3)
    ->setRequired(false)
    ->getData();

    return view('greeting', [
        'input1' => $nameData,
        'input2' => $passwordData,
        'input3' => $studentsData,
        'input4' => $departmentsData,
        'input5' => $skillsData
    ]);

});


    // only single class can be added using setClass method and setClasses for multiple class
    // for input tag setInputValue will be used and for others setValues where and array will be passed

}
```
