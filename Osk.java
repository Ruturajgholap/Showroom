import java.awt.*;
import java.awt.event.*;
import java.io.File;
import java.io.IOException;
import java.io.InputStream;
import java.net.URL;
import java.util.Locale;
import javax.sound.midi.InvalidMidiDataException;
import javax.sound.midi.Soundbank;
import javax.sound.midi.spi.SoundbankReader;
import javax.swing.*;
import javax.swing.plaf.*;
import javax.swing.text.Caret;
class Osk extends JFrame  implements ActionListener
{   
    Robot robo;
JButton b0[],b1[],b2[],b3[],b4[],b5[],tab,shift,caps,shift1,aa;
JButton home,end,delete,insert,page_up,page_down;
int wn=0,al=0,ct=0;

String s0[]={"esc","F1","F2","F3","F4","F5","F6","F7","F8","F9","F10","F11","F12","Prt_sc","Scr_lk","Break"};
String s1[]={"`","1","2","3","4","5","6","7","8","9","0","-","=","<-"};
String s2[]={"q","w","e","r","t","y","u","i","o","p","[","]","\\"};
String s3[]={"a","s","d","f","g","h","j","k","l",";","'","Enter"};
String s4[]={"z","x","c","v","b","n","m",",",".","/","^"};
String s5[]={"ctrl","WIN","alt"," ","alt","prt","ctrl","<<","v",">>"};
String  sym1[]={"~","!","@","#","$","%","^","&","*","(",")","_","+"};
String  sym2[]={"{","}","|"};
String  sym3[]={":","\"",};
String  sym4[]={"<",">","?"};
public  int cap=0,adj,shft=0,cnt=0,flag=0;
public int sss=0;
boolean bl=false; 
  Osk(String str)
{
   super(str);   
   this.setLayout(null); 
  
   try
   {        UIManager.setLookAndFeel("com.sun.java.swing.plaf.windows.WindowsLookAndFeel");      
   }
      catch(Exception e)
      {       
      }  
  allbutton();
  splbtn();
 }                                                   //end constructor  
    
  
    public void actionPerformed(ActionEvent ae)                 //action
    {      
        try
          {
       robo=new Robot();
          }
        catch(Exception e){}
    if(ae.getSource()==caps)                                          // caps
       {        
        if(cap==0)
        {
            cap=1;            
            upper();
            flag=1;
             robo.keyPress(KeyEvent.VK_CAPS_LOCK);
             robo.keyRelease(KeyEvent.VK_CAPS_LOCK);
        }
       else
        {
          cap=0;
          caps.setBackground(null);
          lower();
          flag=0;
            robo.keyPress(KeyEvent.VK_CAPS_LOCK);
            robo.keyRelease(KeyEvent.VK_CAPS_LOCK);
        
         }
       }    
        else if(ae.getSource() == shift||ae.getSource() == shift1)
         {                      
                                if(shft==0 && cap==0)
                                {
                                  robo.keyPress(KeyEvent.VK_SHIFT);
                                  bl=true;
                                  upper();
                                  shiftm();
                                  shft=1;                        
                                }
                                else if(shft==0&&cap==1)
                                {
				shft=1;
                                   lower();
                                   shiftm();
                                   bl=true;
                                   shift.setBackground(Color.lightGray);
                                   shift1.setBackground(Color.lightGray);
                                   robo.keyPress(KeyEvent.VK_SHIFT);
                                  
                                }
                                else if(shft==1 && cap==1)
                                {
                                  shft=0;
                                  lower();
                                  upper();
                                }
                                else
                                {
                                 lower();                                 
                                 shft=0;
                                }
                                
         }    
         else if("alt".equals(ae.getActionCommand()))
                           {  
                               if(al==0)
                               {
                                   al=1;
                              robo.keyPress(KeyEvent.VK_ALT);   
                               }
                               else
                               {
                               robo.keyRelease(KeyEvent.VK_ALT);   
                               al=0;
                               }                              
                           }
         else if("WIN".equals(ae.getActionCommand()))
                           {                     
                               if(wn==0)
                               {
                                   wn=1;
                              robo.keyPress(KeyEvent.VK_WINDOWS);   
                               }
                               else
                               {
                               robo.keyRelease(KeyEvent.VK_WINDOWS);   
                               wn=0;
                               }     
                           }
         else if("ctrl".equals(ae.getActionCommand()))
                           {                     
                              if(ct==0)
                               {
                                   ct=1;
                              robo.keyPress(KeyEvent.VK_CONTROL);   
                               }
                               else
                               {
                               robo.keyRelease(KeyEvent.VK_CONTROL);   
                               ct=0;
                               }     
                           }
    else
        { 
            try
            {       
                if("esc".equals(ae.getActionCommand())) 
                           {                      
                              robo.keyPress(KeyEvent.VK_ESCAPE);
                           }if("F1".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_F1);
                           }if("F2".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_F2);
                           }if("F3".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_F3);
                           }if("F4".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_F4);
                           }if("F5".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_F5);
                           }if("F6".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_F6);
                           }if("F7".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_F7);
                           }if("F8".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_F8);
                           }if("F9".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_F9);
                           }if("F10".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_F10);
                           }if("F11".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_F11);
                           }if("F12".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_F12);
                           }                   
                           if("`".equals(ae.getActionCommand()) || "~".equals(ae.getActionCommand()))
                           robo.keyPress(KeyEvent.VK_BACK_QUOTE);
                           if("1".equals(ae.getActionCommand()) || "!".equals(ae.getActionCommand()))
                           robo.keyPress(KeyEvent.VK_1);
                           if("2".equals(ae.getActionCommand()) || "@".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_2);
                           if("3".equals(ae.getActionCommand()) || "#".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_3);
                           if("4".equals(ae.getActionCommand()) || "$".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_4);
                           if("5".equals(ae.getActionCommand()) || "%".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_5);
                           if("6".equals(ae.getActionCommand()) || "^".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_6);
                           if("7".equals(ae.getActionCommand()) || "&".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_7);
                           if("8".equals(ae.getActionCommand()) || "*".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_8);
                           if("9".equals(ae.getActionCommand()) || "(".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_9);
                           if("0".equals(ae.getActionCommand()) || ")".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_0);
                           if("-".equals(ae.getActionCommand()) || "_".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_MINUS);
                           if("=".equals(ae.getActionCommand()) || "+".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_EQUALS);
                                 
                           if("<-".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_BACK_SPACE);
                           }                                    
                         
                               if("tab".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_TAB);
                           if("Q".equals(ae.getActionCommand())||"q".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_Q);
                           
                           if("W".equals(ae.getActionCommand())||"w".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_W);
                           if("E".equals(ae.getActionCommand())||"e".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_E);
                           if("R".equals(ae.getActionCommand())||"r".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_R);
                           if("T".equals(ae.getActionCommand())||"t".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_T);                              
                           if("Y".equals(ae.getActionCommand())||"y".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_Y);
                           if("U".equals(ae.getActionCommand())||"u".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_U);
                           if("I".equals(ae.getActionCommand())||"i".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_I);
                           if("O".equals(ae.getActionCommand())||"o".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_O);
                           if("P".equals(ae.getActionCommand())||"p".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_P);
                           if("[".equals(ae.getActionCommand())||"{".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_OPEN_BRACKET);
                           if("]".equals(ae.getActionCommand())||"}".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_CLOSE_BRACKET);
                            if("\\".equals(ae.getActionCommand())||"|".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_BACK_SLASH);
                              
                              
                              
                           if("A".equals(ae.getActionCommand())||"a".equals(ae.getActionCommand()))
                           {                               
                                   robo.keyPress(KeyEvent.VK_A);                               
                           }
                           if("S".equals(ae.getActionCommand())||"s".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_S);
                           if("D".equals(ae.getActionCommand())||"d".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_D);
                           if("F".equals(ae.getActionCommand())||"f".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_F);
                           if("G".equals(ae.getActionCommand())||"g".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_G);
                           if("H".equals(ae.getActionCommand())||"h".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_H);
                           if("J".equals(ae.getActionCommand())||"j".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_J);
                           if("K".equals(ae.getActionCommand())||"k".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_K);
                           if("L".equals(ae.getActionCommand())||"l".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_L);
                           if(";".equals(ae.getActionCommand())||":".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_SEMICOLON);
                           if("'".equals(ae.getActionCommand())||"\"".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_QUOTE);
                           if("Enter".equals(ae.getActionCommand()))                     
                              robo.keyPress(KeyEvent.VK_ENTER);
                           
                           
                           
                           if("Z".equals(ae.getActionCommand())||"z".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_Z);
                           if("X".equals(ae.getActionCommand())||"x".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_X);
                           if("C".equals(ae.getActionCommand())||"c".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_C);
                           if("V".equals(ae.getActionCommand())||"v".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_V);
                           if("B".equals(ae.getActionCommand())||"b".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_B);
                           if("N".equals(ae.getActionCommand())||"n".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_N);
                           if("M".equals(ae.getActionCommand())||"m".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_M);
                           if(",".equals(ae.getActionCommand())||"<".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_COMMA);
                           if(".".equals(ae.getActionCommand())||">".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_PERIOD);
                           if("/".equals(ae.getActionCommand())||"?".equals(ae.getActionCommand()))                   
                              robo.keyPress(KeyEvent.VK_SLASH);
                           
                           
                           
                         if("<<".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_LEFT);
                           }
                         if(">>".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_RIGHT);
                           }
                                                   
                                                      
                           if(" ".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_SPACE);
                           }
                           
                            if("Home".equals(ae.getActionCommand()))
                           {                      
                             robo.keyPress(KeyEvent.VK_HOME);
                              
                           } if("End".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_END);
                           }
                            if("Insert".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_INSERT);
                           }
                            if("Delete".equals(ae.getActionCommand()))
                           {                      
                              robo.keyPress(KeyEvent.VK_DELETE);
                           }
                            if("pg_dn".equals(ae.getActionCommand()))
                           {
                                  
                               robo.keyPress(KeyEvent.VK_PAGE_DOWN);
                               robo.keyRelease(KeyEvent.VK_PAGE_DOWN);
                                                         
                           }
                            if("pg_up".equals(ae.getActionCommand()))
                           {                      
                              
                               robo.keyPress(KeyEvent.VK_PAGE_UP);
                               robo.keyRelease(KeyEvent.VK_PAGE_UP);
                           }
                            if("Prt_sc".equals(ae.getActionCommand()))
                           {                      
                              
                               robo.keyPress(KeyEvent.VK_PRINTSCREEN);
                               robo.keyRelease(KeyEvent.VK_PRINTSCREEN);
                           }
                            
                           robo.keyRelease(KeyEvent.VK_SHIFT);
                           if(wn==1)
                           robo.keyRelease(KeyEvent.VK_WINDOWS);
                           if(al==1)
                           robo.keyRelease(KeyEvent.VK_ALT);
                           if(ct==1)
                           robo.keyRelease(KeyEvent.VK_CONTROL);
                           if(shft==1)
                        { 
                          lower();                       
                        shft=0;      
                         }
                            if(shft==0 && cap==1)
                            {
                              upper();
                              shft=1;
                            }
            
            }
            catch(Exception e)
            {
              
            }
        }
                                 
  }                                                      //end Actionperformed
   
   
public void splbtn()
    {
                                             //for Tab button
tab=new JButton("tab");
tab.setBounds(5,100,75,42);
tab.setVisible(true);
tab.addActionListener(this);
add(tab);
                                              //for caps button
caps=new JButton("caps");
caps.setBounds(5,145,88,40);
caps.setVisible(true);
caps.setActionCommand("caps");
this.add(caps);
caps.addActionListener(this);
                                       //for left Shift button
shift=new JButton("shift");
shift.setBounds(5,190,120,40);
shift.setVisible(true);
add(shift);
shift.addActionListener(this);

                                         //for right Shift button
shift1=new JButton("shift");
shift1.setBounds(703,190,120,40);
shift1.setVisible(true);
add(shift1);
shift1.addActionListener(this);

                                         //for home button
home=new JButton("Home");
home.setBounds(825,55,70,42);
home.setVisible(true);
add(home);
home.addActionListener(this);

                                         //for end button
end=new JButton("End");
end.setBounds(827,100,70,42);
end.setVisible(true);
add(end);
end.addActionListener(this);

//for Shift1 button
insert=new JButton("Insert");
insert.setBounds(898,55,70,42);
insert.setVisible(true);
insert.addActionListener(this);
add(insert);

//for page up button
page_up=new JButton("pg_up");
page_up.setBounds(899,100,70,42);
page_up.setVisible(true);
page_up.addActionListener(this);
add(page_up);

//for delete button
delete=new JButton("Delete");
delete.setBounds(827,145,70,42);
delete.setVisible(true);
delete.addActionListener(this);
add(delete);

//for page down button
page_down=new JButton("pg_dn");
page_down.setBounds(899,145,70,42);
page_down.setVisible(true);
page_down.addActionListener(this);
add(page_down);

    }                                                   //end splbtn
public void allbutton()                            //start allbutton
{
     int a=10,b=10;
          b0=new JButton[s0.length];
        for(int i=0;i<b0.length;i++)
        {
            if(s0[i]=="F1")
                a+=10;
            b0[i]=new JButton(s0[i]);
            if(i>=13)
            {
                b0[i].setBounds(a,b,62,40);
                a+=15;
            }
            else
            {
	    b0[i].setBounds(a,b,55,40);
            }
                 b0[i].setVisible(true);
            add(b0[i]);
            b0[i].addActionListener(this);
		a+=57;            
        }
 a=5;b=55;
b1=new JButton[s1.length];
for(int i=0;i<b1.length;i++)
   {
                b1[i]=new JButton(s1[i]);
		if(i==s1.length-1)
		b1[i].setBounds(a,b,73,42);
		else
		b1[i].setBounds(a,b,55,40);
                 b1[i].setVisible(true);
        add(b1[i]);
         b1[i].addActionListener(this);
		a+=57;
    }
   a=82;b=100;
   b2=new JButton[s2.length];
    for(int i=0;i<b2.length;i++)
   {
        if(cap==1)
        b2[i]=new JButton(s2[i]);
        else
        {
        b2[i]=new JButton(s2[i]);
        }
        b2[i].setBounds(a,b,55,40);
        b2[i].setVisible(true);
        add(b2[i]);
        b2[i].addActionListener(this);
		a+=57;
   }
   a=95;b=145;
   b3=new JButton[s3.length];
   for(int i=0;i<b3.length;i++)
   {
       if(cap==1)
        b3[i]=new JButton(s3[i]);
        else
         b3[i]=new JButton(s3[i]);
		if(i==s3.length-1)
		  b3[i].setBounds(a,b,100,40);
		else
         b3[i].setBounds(a,b,55,40);
         b3[i].setVisible(true);
         add(b3[i]);
          b3[i].addActionListener(this);
	 a=a+57;
   }
   b4=new JButton[s4.length];
   a=130;b=190;
   for(int i=0;i<b4.length;i++)
   {
     
        b4[i]=new JButton(s4[i]);
       if(i==s4.length-1)
       {
           a+=130;
        b4[i].setBounds(a,b,70,40);
       }
        b4[i].setBounds(a,b,55,40);
        b4[i].setVisible(true);
        this.add(b4[i]);
         b4[i].addActionListener(this);
		a=a+57;
   }
   b5=new JButton[s5.length];
   a=5;b=235;
   for(int i=0;i<b5.length;i++)
   {
           b5[i]=new JButton(s5[i]);
                if(i==7)
                {
                a+=10;
                }
		if(i==3)
		{
		 b5[i].setBounds(a,b,370,42);
		 a+=315;
		}
		else
         b5[i].setBounds(a,b,60,40);
         b5[i].setVisible(true);
         add(b5[i]);
          b5[i].addActionListener(this);
		 a=a+62;

   }
}                                                 //end allbutton

void shiftm()                                   // for shift method
{
   for(int i=0;i<sym1.length;i++)
       b1[i].setText(sym1[i]);
   int aa=0;
       for(int i=10;i<=12;i++)
   {
        b2[i].setText(sym2[aa++]);
   }
    aa=0;
       for(int i=9;i<=10;i++)
   {
       b3[i].setText(sym3[aa++]);
   }
    aa=0;
        for(int i=7;i<=9;i++)
   {
       b4[i].setText(sym4[aa++]);
   }
}
void upper()                                         //for upper
    {	
       for(int i=0;i<b2.length;i++)
            b2[i].setText(s2[i].toUpperCase());
      for(int i=0;i<b3.length;i++)
          {
            if(!"Enter".equals(b3[i].getText()))
            b3[i].setText(s3[i].toUpperCase());
          }
       for(int i=0;i<b4.length;i++)
             b4[i].setText(s4[i].toUpperCase());       	 		
    }

void lower()                                         //for lower
    {
        for(int i=0;i<s1.length;i++)
        b1[i].setText(s1[i].toLowerCase());
       for(int i=0;i<s2.length;i++)
        b2[i].setText(s2[i].toLowerCase());
      for(int i=0;i<s3.length;i++)
      {
          if(!"Enter".equals(b3[i].getText()))
          b3[i].setText(s3[i].toLowerCase());
      }
       for(int i=0;i<s4.length;i++)
            b4[i].setText(s4[i].toLowerCase());            
    }                                                 
     public static void main(String args[])
    {
      Osk v=new Osk("Virtual Keyboard");
	   v.setSize(1000,320);
       v.setVisible(true);
       v.setResizable(false);
       v.setAlwaysOnTop(true);
       v.setFocusableWindowState(false);
       v.setBackground(Color.red);
       v.setLocation(150,380);
       v.setDefaultCloseOperation(v.EXIT_ON_CLOSE);
    }     
}

