<?php

class AlbumController extends Controller {

    public function init()
    {
        parent::init();
        Yii::import('ext.Picasa.Picasa');
    }

    public function actionIndex()
    {
        $pic = new Picasa();
        $account = $pic->getAlbumsByUsername($this->username);
        $albums = $account->getAlbums();
//        var_dump($albums->getNumphotos());
        
        $album_newest = $pic->getAlbumById($this->username, $albums[0]->getIdnum(), null, null, null, null, null, 1000);
        $images_first_album_newest = $album_newest->getImages();
        //add meta tag fb
        Yii::app()->clientScript->registerMetaTag('Album ảnh của An An Cute', NULL, NULL, array('property' => 'og:title'));
        Yii::app()->clientScript->registerMetaTag('article', NULL, NULL, array('property' => 'og:type'));
        Yii::app()->clientScript->registerMetaTag($images_first_album_newest[0]->getContent(), NULL, NULL, array('property' => 'og:image'));
        Yii::app()->clientScript->registerMetaTag(Yii::app()->getRequest()->getHostInfo() . Yii::app()->request->requestUri, NULL, NULL, array('property' => 'og:url'));
        Yii::app()->clientScript->registerMetaTag('Trang web chia sẻ ảnh và video của An An Cute', NULL, NULL, array('property' => 'og:description'));
        $this->render('index', array('albums' => $albums));
    }

    public function actionPhoto($albumid)
    {
        $pic = new Picasa();
        $album = $pic->getAlbumById($this->username, $albumid, null, null, null, null, null, 1000);
        $images = $album->getImages();
        $albumTitle = $album->getTitle();
        //add meta tag fb
        Yii::app()->clientScript->registerMetaTag($albumTitle, NULL, NULL, array('property' => 'og:title'));
        Yii::app()->clientScript->registerMetaTag('article', NULL, NULL, array('property' => 'og:type'));
        Yii::app()->clientScript->registerMetaTag($images[0]->getContent(), NULL, NULL, array('property' => 'og:image'));
        Yii::app()->clientScript->registerMetaTag(Yii::app()->getRequest()->getHostInfo() . Yii::app()->request->requestUri, NULL, NULL, array('property' => 'og:url'));
        Yii::app()->clientScript->registerMetaTag('Trang web chia sẻ ảnh và video của An An Cute', NULL, NULL, array('property' => 'og:description'));
        $this->pageTitle = 'An An Cute - ' . $albumTitle;
        $this->render('photo', array('images' => $images, 'albumid' => $albumid, 'albumTitle' => $albumTitle));
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}
