function orderLanguages() {
    var language = document.getElementById('selected_language').innerHTML;
    console.log(language);
    
    if (language == 'ENGLISH') {
        document.getElementById('lang_en').style.display = 'none';
        document.getElementById('lang_pt').style.display = 'block';
        document.getElementById('lang_sp').style.display = 'block';
        document.getElementById('lang_fr').style.display = 'block';
    }
    
    if (language == 'PORTUGUÊS') {
        document.getElementById('lang_en').style.display = 'block';
        document.getElementById('lang_pt').style.display = 'none';
        document.getElementById('lang_sp').style.display = 'block';
        document.getElementById('lang_fr').style.display = 'block';
    }
    
    if (language == 'ESPAÑOL') {
        document.getElementById('lang_en').style.display = 'block';
        document.getElementById('lang_pt').style.display = 'block';
        document.getElementById('lang_sp').style.display = 'none';
        document.getElementById('lang_fr').style.display = 'block';
    }
    
    if (language == 'FRANÇAIS') {
        document.getElementById('lang_en').style.display = 'block';
        document.getElementById('lang_pt').style.display = 'block';
        document.getElementById('lang_sp').style.display = 'block';
        document.getElementById('lang_fr').style.display = 'none';
    }
    
    
    
    var language = document.getElementById('selected_language_Mob').innerHTML;
    
    if (language == 'ENGLISH') {
        document.getElementById('lang_en_Mob').style.display = 'none';
        document.getElementById('lang_pt_Mob').style.display = 'block';
        document.getElementById('lang_sp_Mob').style.display = 'block';
        document.getElementById('lang_fr_Mob').style.display = 'block';
    }
    
    if (language == 'PORTUGUÊS') {
        document.getElementById('lang_en_Mob').style.display = 'block';
        document.getElementById('lang_pt_Mob').style.display = 'none';
        document.getElementById('lang_sp_Mob').style.display = 'block';
        document.getElementById('lang_fr_Mob').style.display = 'block';
    }
    
    if (language == 'ESPAÑOL') {
        document.getElementById('lang_en_Mob').style.display = 'block';
        document.getElementById('lang_pt_Mob').style.display = 'block';
        document.getElementById('lang_sp_Mob').style.display = 'none';
        document.getElementById('lang_fr_Mob').style.display = 'block';
    }
    
    if (language == 'FRANÇAIS') {
        document.getElementById('lang_en_Mob').style.display = 'block';
        document.getElementById('lang_pt_Mob').style.display = 'block';
        document.getElementById('lang_sp_Mob').style.display = 'block';
        document.getElementById('lang_fr_Mob').style.display = 'none';
    }
    
    
    
}
