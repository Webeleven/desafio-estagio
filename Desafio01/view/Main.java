package view;

import javax.swing.JOptionPane;

public class Main {

	public static void main(String[] args) {
		int opc;
		int maior = 0;
		int menor=0;
		int num;
		opc = Integer.parseInt(JOptionPane.showInputDialog("Digite um valor para o tamanho da sequência"));
		for (int i = 0; i < opc; i++) {
			num =((int)(Math.random()*101));
			if (i==0)
			{
				
				menor = num;
				maior = num;
			}
			
			
			if(menor>num) {
				menor = num;
			}
			if(maior<num)
			{
				maior = num;
				
			}
			System.out.println(num);
			
		}
		System.out.println(menor +" "+maior);
	}

}
