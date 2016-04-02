package view;

import java.awt.BorderLayout;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.HashSet;
import java.util.Set;

import javax.swing.DefaultListModel;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JList;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JScrollPane;
import javax.swing.JTextField;
/**
 * Insira valores no campo de texto e os insira à lista 
 * pressionando o botão Inesir ou apertando a tecla Enter.
 * Quando terminar, pressione Calcular e o programa informará
 * qual foi o menor e qual foi o menor número digitado
 * 
 * renanpallin@gmail.com
 * @author Renan Pallin
 */
public class Tela implements ActionListener{

	private JFrame frame;
	private JPanel panel;
	private JPanel panelSuperior;
	
	private JTextField tfNumero;
	private JList<Integer> listInteiros;
	private JScrollPane scrollPane;
	private DefaultListModel<Integer> dlm;
	private JButton btnInserir;
	private JButton btnCalcular;
	
	
	public static void main(String[] args) {
		new Tela();
		
	}
	
	public Tela(){
		frame = new JFrame("Desafio 1");
		panel = new JPanel();
		
		frame.setContentPane(panel);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setSize(400, 200);
		frame.setLocationRelativeTo(null);
		
		panelSuperior = new JPanel();
		panel.setLayout(new BorderLayout());
		panelSuperior.setLayout(new GridLayout(1, 2));
		
		tfNumero = new JTextField();
		listInteiros = new JList<Integer>();
		scrollPane = new JScrollPane(listInteiros);
		dlm = new DefaultListModel<>();
		listInteiros.setModel(dlm);

		btnInserir = new JButton("Inserir");
		btnCalcular = new JButton("Calcular");
		
		panelSuperior.add(tfNumero);
		panelSuperior.add(btnInserir);
		panel.add(panelSuperior, BorderLayout.NORTH);
		panel.add(scrollPane, BorderLayout.CENTER);
		panel.add(btnCalcular, BorderLayout.SOUTH);
		
		
		btnInserir.addActionListener( this );
		tfNumero.addActionListener( this );
		
		btnCalcular.addActionListener( new ActionListener() {
			
			@Override
			public void actionPerformed(ActionEvent arg0) {
				Set<Integer> inteiros = new HashSet<Integer>();
				for(int i = 0; i < dlm.getSize(); i++)
					inteiros.add(dlm.getElementAt(i));
				
				JOptionPane.showMessageDialog(null, "O maior é : " + descobreMaior(inteiros) + 
						"\nO menor é : " + descobreMenor(inteiros), "Descobri!", JOptionPane.INFORMATION_MESSAGE);
			}

		});
		
		frame.setVisible(true);
		JOptionPane.showMessageDialog(null, "Preencha a lista de números e eu lhe direi qual é o maior e qual é o menor =)");
	}
	
	private int descobreMenor(Set<Integer> inteiros) {
		int menor = Integer.MAX_VALUE;
		for (Integer integer : inteiros) {
			if (integer.intValue() < menor)
				menor = integer.intValue();
		}
		return menor;
	}

	private int descobreMaior(Set<Integer> inteiros) {
		int maior = Integer.MIN_VALUE;
		for (Integer integer : inteiros) {
			if (integer.intValue() > maior){
				maior = integer.intValue();
			}
		}
		return maior;
	}

	@Override
	public void actionPerformed(ActionEvent arg0) {
		try{
			dlm.addElement(new Integer(Integer.parseInt(tfNumero.getText())));
		}catch (NumberFormatException e){
			JOptionPane.showMessageDialog(null, "O campo aceitará apenas números inteiros!",
					"Erro!", JOptionPane.ERROR_MESSAGE);
		}
		tfNumero.setText("");
	}
}
