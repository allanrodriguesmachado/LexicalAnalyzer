/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package br.com.aulasung.exe;

import br.com.aulasung.classes.Token;

/**
 *
 * @author figue
 */
public class rodar {
    
    public static void main(String[] args) {
        
        Token t= new  Token();
        t.setText("variavel");
        t.setType(Token.TK_IDENTIFIER);
        System.out.println(t.toString());
        
        
        
    }
}
