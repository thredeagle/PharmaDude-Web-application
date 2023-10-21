import java.awt.*;

import javax.swing.*;

import java.awt.event.*;

import javax.swing.event.*;

public class ElectricityListSwing extends JApplet implements ActionListener, ListSelectionListener

String str1, str2;

String items []={"Domestic", "Commercial"}; 
JButton jb1;

JList jlist1;

JLabel j11, j12, j13,j14, j15, j16;

JTextField jtf1, jtf2, jtf3, jtf4, jtf5, jtf6; int amount, units, creading, preading;

public void init()

{

Container contentPane=getContentPane(); 
contentPane.setLayout(new FlowLayout());

j11=new JLabel("Consumer Number");

j12=new JLabel("Consumer Name");

j13=new JLabel("Current Reading");

j14=new JLabel("Previous Reading");

j15=new JLabel("Units consumed");

j16=new JLabel("Total amount");

jtf1=new JTextField(20);
 jtf2=new JTextField(20);
jtf3=new JTextField(20);
j16=new JLabel("Total amount"); 
Jtf4=new JTextField(20); 
jtf5=new JTextField(28);
 jtf6=new JTextField(20);
  jlistl=new JList(items);
   jlist1.setSelectionMode(ListSelectionModel.SINGLE_SELECTION); 
   jb1=new JButton("Bill"); 
   contentPane.add(j11);
    contentPane.add(jtfl);
     contentPane.add(j12); 
     contentPane.add(jtf2); 
     contentPane.add(j13); 
     contentPane.add(jtf3); 
     contentPane.add(j14);
      contentPane.add(jtf4); 
      contentPane.add(jlist1); 
      contentPane.add(j15);
       contentPane.add (jtf5); 
       contentPane.add(j16);
        contentPane.add(jtf6); 
        contentPane.add(jb1);
         jb1.addActionListener(this);
}
public void valueChanged (ListSelectionEvent lse)

{ creading=Integer.parseInt(jtf3.getText());
     preading=Integer.parseInt(jtf4.getText());
     nits=creading-preading;
      str1=String.valueOf(jlist1.getSelectedValue());
       if(str1.equals("Domestic"))
{
if(units<=100)
amount=units*2;

else

amount=100*2+(units-100)*3;
}
if(stri.equals("Commercial"))
{
if(units<=108)

amount=units*4;

else

amount=100*4+(units-100)*8;
}
}

public void actionPerformed(ActionEvent ae)
{
str2=ae.getActionCommand();

if(str2.equals("Bill"))
{
jtf5.setText(String.valueof(units)); 
jtf6.setText(String.valueOf(amount));
 repaint();
}
}
}