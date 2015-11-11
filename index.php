<?
// Սովորում ենք աշխատել ArmStyle template engine-ի հետ:
include("ArmStyle.php"); // Միացնում ենք ArmStyle-ը:
$arm = new ArmStyle; // Ակտիվացնում ենք ArmStyle- ը:
$arm->dir = 'Design/'; // Արտաքին տեսքի ֆայլերը (HTML/CSS/JS ...)
$arm->front_end('index.arm'); // Միացնում ենք արտաքին տեսքի .arm ֆայլը:
/*
Եթե տեքստ է
Կոդ: $arm->display('{barev_hayer}', 'Բարև հայեր! :D');
Եթե HTML (HyperText Markup Language) կոդ է
Կոդ: $arm->display('{barev_hayer}', '<div style="color:red">Բարև հայեր! :D</div>'); 
Եթե PHP (Hypertext Preprocessor)  կոդ է
Կոդ: $arm->display('{barev_hayer}', $barev_hay); կամ $arm->display('{barev_hayer}', '<? php կոդ ... ?>');
Եթե ցանկանում եք միացնել 2 .arm ֆայլ 
Կոդ: $arm->display('{arandzin_arm_fayl}', $arm->combine('arandzin_arm_fayl.arm'));
*/
$arm->display('{barev_hayer}', '<div style="color:red">Բարև հայեր! </br>Շնորհակալություն ArmStyle-ից օգտվելու համար!</div>'); // Գրում ենք տեքստ է կամ ավելացնում ենք նկար, PHP կոդ: 
$arm->display('{Arm_Style_Title}', 'ArmStyle');
$arm->display('{arandzin_arm_fayl}', $arm->combine('arandzin_arm_fayl.arm')); // Միացնում ենք ուրիշ .arm ֆայլ index.arm ֆայլում:
$arm->compile('content');
eval (' ?' . '>' . $arm->result['content'] . '<' . '?php ');  // Վերջ :D
?>
