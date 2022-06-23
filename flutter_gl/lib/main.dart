import 'package:flutter/material.dart';
import 'home.dart';


void main() {
  runApp(
    MaterialApp(
      debugShowCheckedModelBAnner: false,
      home:HomePage()
    )
  
}

class HomePage extends StatelessWidget  {
  @override
  _HomePageState create() => _HomePageState();

}

CLass _HomePageState extends State<HomePage> {
  @override
  Widget build(BuildContext context) {
    return Scafold(
      appBar: new appBar(
        backgroundColor: Colors.red,
        title: Text('Kay DJEUNDE')
        actions: <Widget>[
          new IconButton(icon: Icon(Icon.search, color: Colors.white), onPressed: (){} ),
          new IconButton(icon: Icon(Icon.shopping_cart, color: Colors.white), onPressed: (){} )
        ]
      ),

      drawer: new Drawer(
        child: new ListView(
          children <widget>[
            //header
          new UserAccountDrawerHeader(
            accountName: Text('Baila Wane'), 
            accountEmail: Text('DouveWane85@example.com')
          currentAccountPicture: GestureDector(
            child: new CircleAvatar(
              backgroundColor: Colors.grey,
              child: Icon(Icon.person, color: Colors.white),

            ),
          ),
          decoration: new BoxDecoration(
            color: Colors.red  
          )
          ),
          // Body

          InWell(
            onTap:(){},
            child:LisTile(
              title: Text('Accueil'),
              leading: Icon(Icons.home),
            ),
          ),

          InWell(
            onTap:(){},
            child:LisTile(
              title: Text('Mon Compte'),
              leading: Icon(Icons.home),
            ),
          ),

          InWell(
            onTap:(){},
            child:LisTile(
              title: Text('Mes Commandes'),
              leading: Icon(Icons.home),
            ),
          ),

          InWell(
            onTap:(){},
            child:LisTile(
              title: Text('Mon Compte'),
              leading: Icon(Icons.home),
            ),
          ),

          InWell(
            onTap:(){},
            child:LisTile(
              title: Text('Mes Cathegories'),
              leading: Icon(Icons.home),
            ),
          ),

          InWell(
            onTap:(){},
            child:LisTile(
              title: Text('Mes Finances'),
              leading: Icon(Icons.home),
            ),
          ),

          InWell(
            onTap:(){},
            child:LisTile(
              title: Text('Parametre'),
              leading: Icon(Icons.home),
            ),
          ),


          InWell(
            onTap:(){},
            child:LisTile(
              title: Text('About'),
              leading: Icon(Icons.home),
            ),
          ),


          ],
        ),
      ),
    );
  }
}

