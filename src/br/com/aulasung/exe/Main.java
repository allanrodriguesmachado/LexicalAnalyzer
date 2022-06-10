/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package br.com.aulasung.exe;

import br.com.aulasung.classes.IsiScanner;
import br.com.aulasung.classes.Token;
import br.com.aulasung.exceptions.IsiLexicalException;

/**
 *
 * @author figue
 */

public class Main {
    
    public static void main(String[] args) {
      
        
   
    try{
        IsiScanner sc= new IsiScanner("load.isi");
        Token token=null;
        
        do {
              
            token= sc.nextToken();
            
            if(token!=null){
               
                System.out.println(token); 
            }
             
        }while(token !=null);
        
        }catch(IsiLexicalException ex){
            System.out.println("Lexical Error "+ ex.getMessage());
        }catch(Exception e){
            System.out.println("Generic Error !!");
        }
}  }
