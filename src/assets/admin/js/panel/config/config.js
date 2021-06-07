let possibleResponses = {
    insert: {ok: 'success', err: { file : 'file_err', input: 'input_err'} },
    delete: {ok: 'success', err: 'err'},
};
let icons = {
    ok: '<svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" viewBox="0 0 24 24" style="fill:rgba(0, 200, 11, 1);transform:;-ms-filter:"><path d="M17.207 8.207L15.793 6.793 11 11.586 8.707 9.293 7.293 10.707 11 14.414z"></path><path d="M20,2H4C2.897,2,2,2.897,2,4v18l5.333-4H20c1.103,0,2-0.897,2-2V4C22,2.897,21.103,2,20,2z M20,16H6.667L4,18V4h16V16z"></path></svg>',
    err: '<svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" viewBox="0 0 24 24" style="fill: rgba(200, 0, 0, 1);transform:;-ms-filter:"><path d="M9.707 13.707L12 11.414 14.293 13.707 15.707 12.293 13.414 10 15.707 7.707 14.293 6.293 12 8.586 9.707 6.293 8.293 7.707 10.586 10 8.293 12.293z"></path><path d="M20,2H4C2.897,2,2,2.897,2,4v18l5.333-4H20c1.103,0,2-0.897,2-2V4C22,2.897,21.103,2,20,2z M20,16H6.667L4,18V4h16V16z"></path></svg>',
}
export {possibleResponses, icons}