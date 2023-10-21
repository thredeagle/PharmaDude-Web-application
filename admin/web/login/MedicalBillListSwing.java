import javax.swing.*;

import java.awt.event.*;

import java.awt.event.ActionEvent;

import javax.swing.event.*;
 public class MedicalBillListSwing extends JApplet implements ListSelectionListener, ActionListener
{
String stri;

JButton jbl; 
List jlistl;

int items[];

String test[]={"X-ray", "Blood Test", "Ultrasound Scan"};

JLabel j11,j12,j13;
 JTextField jtf1, jtf2, jtf3;

int amount, xray=500, bloodtest=1000, uscan=5000;

public void init()
{
Container contentPane=getContentPane(); 
contentPane.setLayout(new FlowLayout());

j11=new JLabel("Patient ID");

j12=new JLabel("Patient Name");
 j13=new JLabel("Total Amount");

jtfl=new JTextField(20);
 jtf2=new JTextField(20);

jtf3=new JTextField(20); 
jlist1=new JList(test);

jlistl.setSelectionMode(ListSelectionModel.MULTIPLE_INTERVAL_SELECTION); 
jb1=new JButton("Bill");
jb1=new JButton("Bill");

contentPane.add (j11);

contentPane.add(jtfl);

contentPane.add(j12);

contentPane.add(jtf2);

contentPane.add(jlist1);

contentPane.add(j13);

contentPane.add(jtf3);

contentPane.add(jb1);

jb1.addActionListener(this); jlistl.addListSelectionListener(this);

public void valueChanged (ListSelectionEvent se)
{
amount=0;

items=jlist1.getSelectedIndices();

for(int i=0;i<items.length; i++){ if(items[i]==0)

amount=amount+xray;

if(items[i]==1)

amount=amount+bloodtest;

if(items[i]==2)

amount=amount+uscan;

}

} 
public void actionPerformed (ActionEvent ae)
{
    str1=ae.getActionCommand();
    if(str1.equals("Bill"))
    {
        jt3.setText(String.valueOf(amount));
        repaint();
    }
}
} 