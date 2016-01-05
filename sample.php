<?php
	ptint "helloworld";
	public DynamicPeerInformation(){
		this.filename = "DynamicPeerInformation.xml";
                System.out.println("ファイルは読み込めたよ");
			//ドキュメントビルダーファクトリを生成
			DocumentBuilderFactory dbfactory = DocumentBuilderFactory.newInstance();
                        System.out.println("ドキュメントビルダーファクトリーは作成できたよ");//*********************************←削除予定
			//ドキュメントビルダーを生成
                try{
			DocumentBuilder builder = dbfactory.newDocumentBuilder();
                        System.out.println("ドキュメントビルダーは作成できたよ");//*********************************←削除予定
                        
                
			//パースを実行してDocumentオブジェクトを取得
			document = builder.parse(new BufferedInputStream(new FileInputStream(filename)));
                        System.out.println("オブジェクトを取得したよ");//*********************************←削除予定
			//ルート要素を取得
			root = document.getDocumentElement();
		}catch(Exception e){
			System.err.println("can't read DynamicPeerInformation.xml!");
		}
	}