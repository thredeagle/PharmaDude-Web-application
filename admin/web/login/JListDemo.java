import java.awt.*;

import javax.swing.*;

import java.awt.event.*;

import javax.swing.event.*;

public class JListDemo extends JApplet implements ListSelectionListener
{
 public void init() 
 {

JList jl;

JTextField jtf;
String fruits []={"Apple", "Orange", "Banana", "Pear", "Grapes"};
Container contentPane=getContentPane();
contentPane.setLayout(new FlowLayout());
jl=new JList (fruits); //set the selection mode
jl.setSelectionMode(ListSelectionModel.SINGLE_SELECTION);
jtf=new JTextField(25);
 contentPane.add(jtf); 
 contentPane.add(jl); 
 jl.addListSelectionListener(this);
 }
 public void valueChanged (ListSelectionEvent le)
 { int idx=jl.getSelectedIndex(); 
   String s=fruits[idx];
   String str="You selected "+s;
  jtf.setText(str);
}
}
 