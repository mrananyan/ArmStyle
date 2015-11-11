# ArmStyle
ArmStyle - PHP Template Engine է: Այս կոդը կարող են օգտագործել միայն հայերը միայն հայկական նախագծերում  
Տարբերակ: 1.0.0                                                                                                     
Հեղինակ: Սարգիս Անանյան                                                                                             
Էլ. հասցե: saqoananyan@gmail.com                                                                                     
Հեռ. 1: 096-22-42-19                                                                                                
Հեռ. 2: 091-22-42-19                                                                                         
Facebook: https://www.facebook.com/MrAnanyan
Web Site: http://MixNet.AM
# Օգտագործումը
* Եթե տեքստ է
* Կոդ: $arm->display('{barev_hayer}', 'Բարև հայեր! :D');
* Եթե HTML (HyperText Markup Language) կոդ է
* Կոդ: $arm->display('{barev_hayer}', '<div style="color:red">Բարև հայեր! :D</div>'); 
* Եթե PHP (Hypertext Preprocessor)  կոդ է
* Կոդ: $arm->display('{barev_hayer}', $barev_hay); կամ $arm->display('{barev_hayer}', '<? php կոդ ... ?>');
* Եթե ցանկանում եք միացնել 2 .arm ֆայլ 
* Կոդ: $arm->display('{arandzin_arm_fayl}', $arm->combine('arandzin_arm_fayl.arm'));
