## BUBT ID VERIFICATION API

This is a basic php project. Which can verify BUBT student or Factulty information by their ID!
This project is using BUBT user verification API.

#### Student Verify Url:

```php
"https://bubt.edu.bd/global_file/getData.php?id=$studentid&type=stdVerify"
```

#### Response:

```json
{
  "sis_std_id": "",
  "sis_std_name": "",
  "sis_std_prgrm_sn": "",
  "sis_std_intk": "",
  "sis_std_email": "",
  "sis_std_father": "",
  "sis_std_gender": "",
  "sis_std_LocGuardian": "",
  "sis_std_Bplace": "",
  "sis_std_Status": "",
  "sis_std_blood": "",
  "gazo": ""
}
```

#### Faculty Verify Url:

```php
"https://bubt.edu.bd/global_file/getData.php?id=$faculty_id&type=empVerify"
```

#### Response:

```json
[
  {
    "EmpId": "",
    "DemoId": "",
    "EmpName": "",
    "DOB": "",
    "PermanentAddress": "",
    "FatherName": "",
    "ECName": "",
    "ECNo": "",
    "ECRelation": "",
    "Gender": "",
    "DeptName": "",
    "PosName": "",
    "BloodGroup": "",
    "StatusId": "",
    "EmpImage": ""
  }
]
```

> Last Checked At 02-Jul-2021
