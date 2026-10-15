(function(){
  var b=document.querySelector('.burger'),n=document.getElementById('nav');
  if(b&&n)b.addEventListener('click',function(){var o=n.classList.toggle('open');b.setAttribute('aria-expanded',o?'true':'false');});
  // Waterproof rating gauge
  var R=[[0,'Water resistant','Handles brief drizzle and light mist only. Water will soak through in steady rain.'],
    [5000,'Showerproof','Fine for light rain and short walks between buildings, but not prolonged downpours.'],
    [10000,'Waterproof','Comfortable in moderate rain for a few hours: commuting, city walks and day hikes.'],
    [15000,'Very waterproof','Holds up to heavy rain and the pressure of backpack straps on the shoulders.'],
    [20000,'Storm-proof','Built for sustained heavy rain, wind-driven storms and multi-day mountain trips.']];
  var hh=document.getElementById('hh');
  function rate(){if(!hh)return;var v=parseInt(hh.value,10),k=0;for(var i=0;i<R.length;i++)if(v>=R[i][0])k=i;
    document.getElementById('hh-val').innerHTML=v.toLocaleString('en-US')+' <small>mm</small>';
    document.getElementById('hh-tube').style.height=Math.min(100,v/300)+'%';
    document.getElementById('hh-name').textContent=R[k][1];document.getElementById('hh-desc').textContent=R[k][2];
    document.querySelectorAll('.scale li').forEach(function(li,i){li.classList.toggle('on',i===k);});}
  if(hh){hh.addEventListener('input',rate);rate();}
  // Jacket type tabs
  var tabs=document.querySelectorAll('[role="tab"]');
  tabs.forEach(function(t,idx){t.addEventListener('click',function(){sel(t);});
    t.addEventListener('keydown',function(e){var d=e.key==='ArrowRight'?1:e.key==='ArrowLeft'?-1:0;if(!d)return;var nx=tabs[(idx+d+tabs.length)%tabs.length];sel(nx);nx.focus();});});
  function sel(t){tabs.forEach(function(x){x.setAttribute('aria-selected','false');x.tabIndex=-1;document.getElementById(x.getAttribute('aria-controls')).hidden=true;});
    t.setAttribute('aria-selected','true');t.tabIndex=0;document.getElementById(t.getAttribute('aria-controls')).hidden=false;}
  // Rain-ready matcher
  var mf=document.getElementById('matcher');
  function match(){if(!mf)return;var a=mf.querySelector('[name=act]:checked').value,r=mf.querySelector('[name=rain]:checked').value,c=mf.querySelector('[name=temp]:checked').value,t,l,p=[];
    if(a==='hike'){t=r==='light'?'2.5-layer packable shell':'3-layer hardshell';l='Aim for 15,000 mm or more and good breathability.';p=['Fully taped seams and a helmet-compatible or adjustable hood','Pit zips for venting on climbs','Packs into its own pocket or a small stuff sack'];}
    else if(a==='cycle'){t='Cycling rain jacket';l='Look for 10,000 mm or more with a dropped tail.';p=['Longer back hem to block road spray','Reflective details and bright colour','Snug cuffs and a hood that fits under or over a helmet'];}
    else if(r==='heavy'){t='Waterproof city parka';l='A 10,000–15,000 mm rating keeps a commute dry.';p=['Hip or thigh length for extra coverage','Storm flap over the main zip','Deep peaked hood'];}
    else{t=c==='cold'?'Waxed cotton jacket or lined trench':'Classic trench or packable mac';l='Showerproof to waterproof is plenty for short trips.';p=['Smart enough for work and evenings','Belt or drawcord for shape and wind protection','Pairs with an umbrella on very wet days'];}
    if(c==='cold')p.push('Add a fleece or light insulated mid-layer underneath');
    if(c==='warm')p.push('Choose a lighter shell and prioritise ventilation');
    document.getElementById('m-type').textContent=t;document.getElementById('m-line').textContent=l;
    document.getElementById('m-list').innerHTML=p.map(function(x){return '<li>'+x+'</li>';}).join('');}
  if(mf){mf.addEventListener('change',match);match();}
  // Cookie
  var c=document.getElementById('cookie'),v=null;try{v=localStorage.getItem('rwb_cookie');}catch(e){}
  if(c&&!v)c.classList.add('show');
  document.querySelectorAll('[data-cookie]').forEach(function(x){x.addEventListener('click',function(){try{localStorage.setItem('rwb_cookie',x.dataset.cookie);}catch(e){}c.classList.remove('show');});});
  var y=document.getElementById('year');if(y)y.textContent=new Date().getFullYear();
})();
