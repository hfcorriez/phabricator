<?php

final class PhabricatorOAuthServerAccessToken
  extends PhabricatorOAuthServerDAO {

  protected $id;
  protected $token;
  protected $userPHID;
  protected $clientPHID;
}
